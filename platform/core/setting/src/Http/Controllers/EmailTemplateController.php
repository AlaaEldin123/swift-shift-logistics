<?php

namespace Botble\Setting\Http\Controllers;

use Botble\Base\Facades\Assets;
use Botble\Base\Facades\BaseHelper;
use Botble\Setting\Http\Requests\EmailTemplateRequest;
use Illuminate\Contracts\View\View;

class EmailTemplateController extends SettingController
{
    public function __construct()
    {
        $this->breadcrumb()->add(
            trans('core/setting::setting.email.email_templates'),
            route('settings.email.template')
        );
    }
    public function index(string $type, string $module, string $template): View
    {
        $this->pageTitle(trans(config(sprintf('%s.%s.email.templates.%s.title', $type, $module, $template), '')));

        Assets::addScriptsDirectly('vendor/core/core/setting/js/email-template.js');

        $emailContent = get_setting_email_template_content($type, $module, $template);
        $emailSubject = get_setting_email_subject($type, $module, $template);
        $pluginData = [
            'type' => $type,
            'name' => $module,
            'template_file' => $template,
        ];

        $routeParams = [$type, $module, $template];

        $updateUrl = route('settings.email.template.update', $routeParams);
        $restoreUrl = route('settings.email.template.restore', $routeParams);

        return view('core/setting::email-template-edit', compact('emailContent', 'emailSubject', 'pluginData', 'updateUrl', 'restoreUrl'));
    }

    public function update(EmailTemplateRequest $request)
    {
        if ($request->has('email_subject_key')) {
            $this->saveSettings([
                $request->input('email_subject_key') => $request->input('email_subject'),
            ]);
        }

        $templatePath = get_setting_email_template_path($request->input('module'), $request->input('template_file'));

        BaseHelper::saveFileData($templatePath, $request->input('email_content'), false);

        return $this
            ->httpResponse()
            ->withUpdatedSuccessMessage();
    }
}
