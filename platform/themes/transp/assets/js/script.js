class TranspApp {
    toastElement = document.querySelector('.toast')
    toast = new bootstrap.Toast(this.toastElement)

    showSuccess(message) {
        this.toastElement.querySelector('.toast-body').innerHTML = message
        this.toastElement.classList.add('bg-success')
        this.toastElement.classList.remove('bg-danger')
        this.toast.show()
    }

    showError(message) {
        this.toastElement.querySelector('.toast-body').innerHTML = message
        this.toastElement.classList.add('bg-danger')
        this.toastElement.classList.remove('bg-success')
        this.toast.show()
    }

    handleError(data) {
        if (typeof data.errors !== 'undefined' && !_.isArray(data.errors)) {
            this.handleValidationError(data.errors)
        } else {
            if (typeof data.responseJSON !== 'undefined') {
                if (typeof data.responseJSON.errors !== 'undefined') {
                    if (data.status === 422) {
                        this.handleValidationError(data.responseJSON.errors)
                    }
                } else if (typeof data.responseJSON.message !== 'undefined') {
                    this.showError(data.responseJSON.message)
                } else {
                    $.each(data.responseJSON, (index, el) => {
                        $.each(el, (key, item) => {
                                this.showError(item)
                        })
                    })
                }
            } else {
                this.showError(data.statusText)
            }
        }
    }

    handleValidationError(errors) {
        let message = ''

        $.each(errors, (index, item) => {
            message += `<li>${item}</li>`

            let $input = $(`*[name="${index}"]`)
            if ($input.closest('.next-input--stylized').length) {
                $input.closest('.next-input--stylized').addClass('field-has-error')
            } else {
                $input.addClass('field-has-error')
            }

            let $inputArray = $(`*[name$="[${index}]"]`)

            if ($inputArray.closest('.next-input--stylized').length) {
                $inputArray.closest('.next-input--stylized').addClass('field-has-error')
            } else {
                $inputArray.addClass('field-has-error')
            }
        })

        this.showError(message)
    }
}

$(document).ready(function () {
    'use strict'

    window.TranspApp = new TranspApp()

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $(document).on('click', '.newsletter-form button[type=submit]', function (event) {
        event.preventDefault();
        event.stopPropagation();

        let _self = $(this);
        $.ajax({
            type: 'POST',
            cache: false,
            url: _self.closest('form').prop('action'),
            data: new FormData(_self.closest('form')[0]),
            contentType: false,
            processData: false,
            success: ({ error, message }) => {
                if (error) {
                    window.TranspApp.showError(message)
                    return
                }

                window.TranspApp.showSuccess(message)
            },
            error: (error) => {
                window.TranspApp.handleError(error)
            },
            beforeSend: () => {
                _self.addClass('button-loading')
                _self.attr('disable')
            },
            complete: () => {
                _self.removeClass('button-loading')
                _self.removeAttr('disable')
                _self.value = ''
            },
        });
    });

    $(document).on('submit', '#request-quote-form', function (event) {
        event.preventDefault()

        const $form = $(this)
        const $button = $(this).find('button[type="submit"]')

        $.ajax({
            url: $form.prop('action'),
            method: 'POST',
            data: $form.serialize(),
            beforeSend: () => {
                $button.addClass('button-loading')
            },
            success: ({ error, message }) => {
                if (error) {
                    window.TranspApp.showError(message)

                    return
                }

                window.TranspApp.showSuccess(message)

                $form.find('input[type="text"], input[type="email"], textarea').val('')
            },
            error: (error) => {
                window.TranspApp.handleError(error)
            },
            complete: () => {
                $button.removeClass('button-loading')
            }
        })
    })
})
