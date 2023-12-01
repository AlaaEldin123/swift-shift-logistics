<?php

use Botble\Base\Facades\Html;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;
use Botble\Gallery\Models\Gallery;
use Botble\Logistics\Enums\PackageDuration;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\Service;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Team\Models\Team;
use Botble\Testimonial\Models\Testimonial;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Supports\ThemeSupport;
use Botble\Theme\Supports\Youtube;
use Carbon\Carbon;
use Illuminate\Support\Arr;

app()->booted(function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();

    if (is_plugin_active('simple-slider')) {
        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function (): string|null {
            return Theme::getThemeNamespace('partials.shortcodes.simple-slider.index');
        });
    }

    Shortcode::register('hero-banner', __('Hero Banner'), __('Hero Banner'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'data', 'unit', 'action', 'label', 'action', 'image', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        $youtubeUrlId = $shortcode->youtube_video_url ? Youtube::getYoutubeVideoID($shortcode->youtube_video_url) : null;

        return Theme::partial('shortcodes.hero-banner.index', compact('shortcode', 'tabs', 'youtubeUrlId'));
    });

    Shortcode::setAdminConfig('hero-banner', function (array $attributes): string {
        return Theme::partial('shortcodes.hero-banner.admin', compact('attributes'));
    });

    Shortcode::register('brands', __('Brands'), __('Brands'), function (ShortcodeCompiler $shortcode): string {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['name', 'image', 'link'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.brands.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('brands', function (array $attributes): string|null {
        return Theme::partial('shortcodes.brands.admin', compact('attributes'));
    });

    Shortcode::register('services', __('Services'), __('Services'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'image', 'description', 'link'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.services.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('services', function (array $attributes): string|null {
        return Theme::partial('shortcodes.services.admin', compact('attributes'));
    });

    Shortcode::register('information-1', __('Information 1'), __('Information 1'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'icon', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.information-1.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('information-1', function (array $attributes): string|null {
        return Theme::partial('shortcodes.information-1.admin', compact('attributes'));
    });

    Shortcode::register('information-2', __('Information 2'), __('Information 2'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'image', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.information-2.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('information-2', function (array $attributes): string|null {
        return Theme::partial('shortcodes.information-2.admin', compact('attributes'));
    });

    Shortcode::register('how-it-works', __('How it works'), __('How it works'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabsFields = ['title', 'description', 'image'];
        $tabs = get_shortcode_tabs($tabsFields, $shortcode, $quantity);

        $youtubeUrlId = $shortcode->youtube_video_url ? Youtube::getYoutubeVideoID($shortcode->youtube_video_url) : null;

        return Theme::partial('shortcodes.how-it-works.index', compact('shortcode', 'tabs', 'youtubeUrlId'));
    });

    Shortcode::setAdminConfig('how-it-works', function (array $attributes): string|null {
        return Theme::partial('shortcodes.how-it-works.admin', compact('attributes'));
    });

    if (is_plugin_active('testimonial')) {
        Shortcode::register('testimonials', __('Testimonials'), __('Testimonials'), function (ShortcodeCompiler $shortcode): string|null {
            $testimonials = Testimonial::query()
                ->wherePublished()
                ->limit((int) $shortcode->limit ?: 4)
                ->get();

            return Theme::partial('shortcodes.testimonials.index', compact('shortcode', 'testimonials'));
        });

        Shortcode::setAdminConfig('testimonials', function (array $attributes): string|null {
            return Theme::partial('shortcodes.testimonials.admin', compact('attributes'));
        });

        Shortcode::register('testimonial-single', __('Testimonial single'), __('Testimonial single'), function (ShortcodeCompiler $shortcode): string|null {
            if (! $testimonialId = $shortcode->testimonial_id) {
                return null;
            }

            $testimonial = Testimonial::query()
                ->wherePublished()
                ->whereKey($testimonialId)
                ->first();

            if (! $testimonial) {
                return null;
            }

            return Theme::partial('shortcodes.testimonial-single.index', compact('shortcode', 'testimonial'));
        });

        Shortcode::setAdminConfig('testimonial-single', function (array $attributes): string|null {
            $testimonials = Testimonial::query()
                ->wherePublished()
                ->pluck('name', 'id')
                ->all();

            return Theme::partial('shortcodes.testimonial-single.admin', compact('attributes', 'testimonials'));
        });
    }

    Shortcode::register('projects', __('Projects'), __('Projects'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.projects.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('projects', function (array $attributes): string|null {
        return Theme::partial('shortcodes.projects.admin', compact('attributes'));
    });

    if (is_plugin_active('logistics')) {
        add_filter('request-quote-shortcode', function () {
            return Theme::getThemeNamespace('partials.shortcodes.request-quote.index');
        });

        Shortcode::setAdminConfig('request-quote', function (array $attributes): string|null {
            return Theme::partial('shortcodes.request-quote.admin', compact('attributes'));
        });

        Shortcode::register('pricing', __('Pricing'), __('Pricing'), function (ShortcodeCompiler $shortcode): string|null {
            $packageIds = explode(',', $shortcode->package_ids);

            $packages = collect();

            if ($packageIds) {
                $packages = Package::query()
                    ->wherePublished()
                    ->whereIn('id', $packageIds)
                    ->get();
            }

            foreach ($packages as $package) {
                switch ($package->duration->getValue()) {
                    case PackageDuration::HOURLY:
                        $package->setAttribute('formatted_duration', __('Hour'));

                        break;
                    case PackageDuration::DAILY:
                        $package->setAttribute('formatted_duration', __('Day'));

                        break;
                    case PackageDuration::WEEKLY:
                        $package->setAttribute('formatted_duration', __('Week'));

                        break;
                    case PackageDuration::MONTHLY:
                        $package->setAttribute('formatted_duration', __('Month'));

                        break;
                    case PackageDuration::QUARTERLY:
                        $package->setAttribute('formatted_duration', __('Quarter'));

                        break;
                    case PackageDuration::ANNUALLY:
                        $package->setAttribute('formatted_duration', __('Year'));

                        break;
                }
            }

            return Theme::partial('shortcodes.pricing.index', compact('shortcode', 'packages'));
        });

        Shortcode::setAdminConfig('pricing', function (array $attributes): string|null {
            $packages = Package::query()
                ->wherePublished()
                ->pluck('name', 'id')
                ->all();

            return Html::style('vendor/core/core/base/libraries/tagify/tagify.css') .
                Html::script('vendor/core/core/base/libraries/tagify/tagify.js') .
                Html::script('vendor/core/core/base/js/tags.js') .
                Theme::partial('shortcodes.pricing.admin', compact('attributes', 'packages'));
        });

        Shortcode::register('our-services', __('Our Services'), __('Our Services'), function (ShortcodeCompiler $shortcode): string|null {
            if (! $shortcode->service_ids) {
                return null;
            }

            $serviceIds = explode(',', $shortcode->service_ids);

            if (! $serviceIds) {
                return null;
            }

            $services = Service::query()
                ->whereIn('id', $serviceIds)
                ->wherePublished()
                ->get();

            return Theme::partial('shortcodes.our-services.index', compact('shortcode', 'services'));
        });

        Shortcode::setAdminConfig('our-services', function (array $attributes): string|null {
            $services = Service::query()
                ->wherePublished()
                ->pluck('title', 'id')
                ->all();

            $serviceIds = explode(',', Arr::get($attributes, 'service_ids', ''));

            return Theme::partial(
                'shortcodes.our-services.admin',
                compact('attributes', 'services', 'serviceIds')
            );
        });
    }

    if (is_plugin_active('faq')) {
        Shortcode::register('faqs', __('FAQs'), __('FAQs'), function (ShortcodeCompiler $shortcode): string|null {
            $categoryIds = $shortcode->category_ids ? explode(',', $shortcode->category_ids) : [];

            $faqs = collect();

            if (! empty($categoryIds)) {
                $faqs = Faq::query()
                    ->whereIn('category_id', $categoryIds)
                    ->wherePublished()
                    ->get();
            }

            $gallery = null;

            if ($shortcode->gallery_id) {
                $gallery = Gallery::query()
                    ->wherePublished()
                    ->find($shortcode->gallery_id);
            }

            return Theme::partial('shortcodes.faqs.index', compact('shortcode', 'faqs', 'gallery'));
        });

        Shortcode::setAdminConfig('faqs', function (array $attributes): string|null {
            $categories = FaqCategory::query()
                ->pluck('name', 'id')
                ->toArray();
            $galleries = Gallery::query()
                ->wherePublished()
                ->pluck('name', 'id')
                ->toArray();

            $categoryIds = explode(',', Arr::get($attributes, 'category_ids', ''));

            return Theme::partial(
                'shortcodes.faqs.admin',
                compact('attributes', 'categories', 'categoryIds', 'galleries')
            );
        });
    }

    Shortcode::register('call-to-action', __('Call To Action'), __('Call To Action'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.call-to-action.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('call-to-action', function (array $attributes): string|null {
        return Theme::partial('shortcodes.call-to-action.admin', compact('attributes'));
    });

    if (is_plugin_active('blog')) {
        Shortcode::register('news', __('News'), __('News'), function (ShortcodeCompiler $shortcode): string|null {
            $limit = (int) $shortcode->limit ?: 4;

            $posts = match ($shortcode->type) {
                'popular' => get_popular_posts($limit),
                'featured' => get_featured_posts($limit),
                'recent' => get_recent_posts($limit),
                default => get_latest_posts($limit),
            };

            if ($posts->isEmpty()) {
                return null;
            }

            return Theme::partial('shortcodes.news.index', compact('shortcode', 'posts'));
        });

        Shortcode::setAdminConfig('news', function (array $attributes): string|null {
            $types = [
                'latest' => __('Latest'),
                'popular' => __('Popular'),
                'featured' => __('Featured'),
                'recent' => __('Recent'),
            ];

            return Theme::partial('shortcodes.news.admin', compact('attributes', 'types'));
        });

        Shortcode::register('blog-posts', __('Blog posts'), __('Blog posts'), function (ShortcodeCompiler $shortcode): string|null {
            Theme::asset()->container('footer')->usePath()->add('blog-posts-js', 'js/blog-posts.js');

            if (! $shortcode->category_ids) {
                return null;
            }

            $categoryIds = explode(',', $shortcode->category_ids);

            if (! $categoryIds) {
                return null;
            }

            $categories = Category::query()
                ->whereIn('id', $categoryIds)
                ->wherePublished()
                ->get();

            return Theme::partial('shortcodes.blog-posts.index', compact('shortcode', 'categories'));
        });

        Shortcode::setAdminConfig('blog-posts', function (array $attributes): string|null {
            $categories = Category::query()
                ->wherePublished()
                ->pluck('name', 'id')
                ->all();

            $categoryIds = explode(',', Arr::get($attributes, 'category_ids'));

            return Theme::partial('shortcodes.blog-posts.admin', compact('attributes', 'categories', 'categoryIds'));
        });

        Shortcode::register('posts', __('Posts'), __('Posts'), function (ShortcodeCompiler $shortcode): string|null {
            $perPage = $shortcode->per_page ?: 6;

            $posts = Post::query()
                ->wherePublished()
                ->paginate($perPage);

            if ($posts->isEmpty()) {
                return null;
            }

            return Theme::partial('shortcodes.posts.index', compact('shortcode', 'posts'));
        });

        Shortcode::setAdminConfig('posts', function (array $attributes): string|null {
            return Theme::partial('shortcodes.posts.admin', compact('attributes'));
        });
    }
    Shortcode::register('map', __('Map'), __('Map'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.map.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('map', function (array $attributes): string|null {
        return Theme::partial('shortcodes.map.admin', compact('attributes'));
    });

    Shortcode::register('coming-soon', __('Coming Soon'), __('Coming Soon'), function (ShortcodeCompiler $shortcode): string {
        try {
            $isOpeningTime = Carbon::parse($shortcode->time) > Carbon::now();
        } catch (Exception) {
            $isOpeningTime = false;
        }

        return Theme::partial('shortcodes.coming-soon.index', compact('shortcode', 'isOpeningTime'));
    });

    Shortcode::setAdminConfig('coming-soon', function (array $attributes): string {
        return Theme::partial('shortcodes.coming-soon.admin', compact('attributes'));
    });

    Shortcode::register('our-features', __('Our Features'), __('Our Features'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabs = get_shortcode_tabs(['title'], $shortcode, $quantity);

        return Theme::partial('shortcodes.our-features.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('our-features', function (array $attributes): string|null {
        return Theme::partial('shortcodes.our-features.admin', compact('attributes'));
    });

    Shortcode::register('site-statistics', __('Site Statistics'), __('Site Statistics'), function (ShortcodeCompiler $shortcode): string {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'data', 'unit', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.site-statistics.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('site-statistics', function (array $attributes): string|null {
        return Theme::partial('shortcodes.site-statistics.admin', compact('attributes'));
    });

    Shortcode::setAdminConfig('why-choose-us', function (array $attributes): string|null {
        return Theme::partial('shortcodes.why-choose-us.admin', compact('attributes'));
    });

    Shortcode::setAdminConfig('get-in-touch-with-us', function (array $attributes): string {
        return Theme::partial('shortcodes.get-in-touch-with-us.admin', compact('attributes'));
    });

    Shortcode::register('get-in-touch-with-us', __('Get in touch with Us'), __('Get in touch with Us'), function (ShortcodeCompiler $shortcode): string {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'image', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.get-in-touch-with-us.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('get-in-touch-with-us', function (array $attributes): string {
        return Theme::partial('shortcodes.get-in-touch-with-us.admin', compact('attributes'));
    });

    Shortcode::register('about-information-1', __('About Information 1'), __('About Information 1'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.about-information-1.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('about-information-1', function (array $attributes): string|null {
        return Theme::partial('shortcodes.about-information-1.admin', compact('attributes'));
    });

    Shortcode::register('about-information-2', __('About Information 2'), __('About Information 2'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.about-information-2.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('about-information-2', function (array $attributes): string|null {
        return Theme::partial('shortcodes.about-information-2.admin', compact('attributes'));
    });

    if (is_plugin_active('team')) {
        Shortcode::register('teams', __('Team'), __('Team'), function (ShortcodeCompiler $shortcode): string|null {
            if (! $shortcode->team_ids) {
                return null;
            }

            $teamIds = explode(',', $shortcode->team_ids);

            if (! $teamIds) {
                return null;
            }

            $teams = Team::query()
                ->whereIn('id', $teamIds)
                ->wherePublished()
                ->get();

            return Theme::partial('shortcodes.teams.index', compact('shortcode', 'teams'));
        });

        Shortcode::setAdminConfig('teams', function (array $attributes): string|null {
            $teams = Team::query()
                ->wherePublished()
                ->pluck('name', 'id')
                ->all();

            $teamIds = explode(',', Arr::get($attributes, 'team_ids'));

            return Theme::partial('shortcodes.teams.admin', compact('attributes', 'teams', 'teamIds'));
        });
    }

    Shortcode::register('our-process', __('Our process'), __('Our process'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'description', 'image', 'icon', 'link_label', 'link_url'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.our-process.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('our-process', function (array $attributes): string|null {
        return Theme::partial('shortcodes.our-process.admin', compact('attributes'));
    });

    Shortcode::register('why-choose-us', __('Why choose us'), __('Why choose us'), function (ShortcodeCompiler $shortcode): string|null {
        $tickedArray = [];
        if ($shortcode->ticked_line) {
            $tickedArray = explode(', ', $shortcode->ticked_line);
        }

        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'icon', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.why-choose-us.index', compact('shortcode', 'tickedArray', 'tabs'));
    });

    Shortcode::setAdminConfig('why-choose-us', function (array $attributes): string|null {
        return Theme::partial('shortcodes.why-choose-us.admin', compact('attributes'));
    });

    if (is_plugin_active('contact')) {
        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace('partials.shortcodes.contact-form.index');
        }, 120);

        Shortcode::setAdminConfig('contact-form', function (array $attributes): string {
            return Theme::partial('shortcodes.contact-form.admin', compact('attributes'));
        });
    }

    Shortcode::register('who-we-are', __('Who We Are'), __('Who We Are'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'icon', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        $youtubeUrlId = $shortcode->youtube_video_url ? Youtube::getYoutubeVideoID($shortcode->youtube_video_url) : null;

        return Theme::partial('shortcodes.who-we-are.index', compact('shortcode', 'tabs', 'youtubeUrlId'));
    });

    Shortcode::setAdminConfig('who-we-are', function (array $attributes): string|null {
        return Theme::partial('shortcodes.who-we-are.admin', compact('attributes'));
    });

    Shortcode::register('what-we-offer', __('What We Offer'), __('What We Offer'), function (ShortcodeCompiler $shortcode): string|null {
        $quantity = min((int) $shortcode->quantity, 20);
        $tabFields = ['title', 'url', 'image', 'icon', 'description'];
        $tabs = get_shortcode_tabs($tabFields, $shortcode, $quantity);

        return Theme::partial('shortcodes.what-we-offer.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('what-we-offer', function (array $attributes): string|null {
        return Theme::partial('shortcodes.what-we-offer.admin', compact('attributes'));
    });

    Shortcode::register('ads-banner', __('Ads Banner'), __('Ads Banner'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.ads-banner.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('ads-banner', function (array $attributes): string|null {
        return Theme::partial('shortcodes.ads-banner.admin', compact('attributes'));
    });

    Shortcode::register('track-your-parcel', __('Track your parcel'), __('Track your parcel'), function (ShortcodeCompiler $shortcode): string|null {
        return Theme::partial('shortcodes.track-your-parcel.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('track-your-parcel', function (array $attributes): string|null {
        return Theme::partial('shortcodes.track-your-parcel.admin', compact('attributes'));
    });

    Shortcode::register('branch-offices', __('Branch offices'), __('Branch offices'), function (ShortcodeCompiler $shortcode): string|null {
        $tabs = [];
        $quantity = min((int) $shortcode->quantity, 20);
        if ($quantity) {
            for ($i = 1; $i <= $quantity; $i++) {
                $tabs[] = [
                    'image' => $shortcode->{'image_' . $i},
                    'icon' => $shortcode->{'icon_' . $i},
                    'title' => $shortcode->{'title_' . $i},
                    'address' => $shortcode->{'address_' . $i},
                    'phone_number' => $shortcode->{'phone_number_' . $i},
                    'email' => $shortcode->{'email_' . $i},
                ];
            }
        }

        return Theme::partial('shortcodes.branch-offices.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('branch-offices', function (array $attributes): string|null {
        return Theme::partial('shortcodes.branch-offices.admin', compact('attributes'));
    });
});

function get_shortcode_tabs(array $fields, ShortcodeCompiler $shortcode, $quantity): array
{
    if (empty($shortcode->toArray()) || empty($fields) || ! $quantity) {
        return [];
    }

    $tabs = [];

    for ($i = 1; $i <= $quantity; $i++) {
        $tab = [];
        foreach ($fields as $field) {
            $tab[$field] = $shortcode->{$field . '_' . $i};
        }

        $tabs[] = $tab;
    }

    return $tabs;
}
