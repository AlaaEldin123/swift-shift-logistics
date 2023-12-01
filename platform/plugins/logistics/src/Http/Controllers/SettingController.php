<?php

namespace Botble\Logistics\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Logistics\Http\Requests\SettingRequest;
use Botble\Setting\Facades\Setting;
use Illuminate\Contracts\View\View;

class SettingController extends BaseController
{
    public function index(): View
    {
        return view('plugins::logistics.settings.index');
    }

    public function update(SettingRequest $request, BaseHttpResponse $response): BaseHttpResponse
    {
        Setting::set($request->validated());
        Setting::save();

        return $response->setMessage(trans('plugins/logistics::logistics.settings.success_message'));
    }
}
