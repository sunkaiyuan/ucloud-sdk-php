<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class SendBatchUSMSMessageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendBatchUSMSMessage"]);
        $this->markRequired("ProjectId");
        $this->markRequired("TaskContent");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TaskContent: 批量发送内容，该参数是json数组的base64编码结果。发送内容json数组中，每个“模板+签名”组合作为一个子项，每个子项内支持多个号码，示例：发送内容json数组（base64编码前）：[{"TemplateId": "UTA20212831C85C", "SigContent": "UCloud", "Target": [{"TemplateParams": ["123456"], "Phone": "18500000123", "ExtendCode": "123", "UserId": "456"} ] } ]   。json数组中各参数的定义："TemplateId":模板ID，"SigContent"短信签名内容，"Target"具体到号码粒度的发送内容。"Target"中的具体字段有："TemplateParams"实际发送的模板参数（若使用的是无参数模板，该参数不能传值），"Phone"手机号码, "ExtendCode"短信扩展码, "UserId"自定义业务标识ID。其中必传参数为"TemplateId", "SigContent", "Target"（"Target"中必传参数为"Phone"）。实际调用本接口时TaskContent传值（发送内容base64编码后）为：W3siVGVtcGxhdGVJZCI6ICJVVEEyMDIxMjgzMUM4NUMiLCAiU2lnQ29udGVudCI6ICJVQ2xvdWQiLCAiVGFyZ2V0IjogW3siVGVtcGxhdGVQYXJhbXMiOiBbIjEyMzQ1NiJdLCAiUGhvbmUiOiAiMTg1MDAwMDAxMjMiLCAiRXh0ZW5kQ29kZSI6ICIxMjMiLCAiVXNlcklkIjogIjQ1NiJ9IF0gfSBdIA==
     *
     * @return string|null
     */
    public function getTaskContent()
    {
        return $this->get("TaskContent");
    }

    /**
     * TaskContent: 批量发送内容，该参数是json数组的base64编码结果。发送内容json数组中，每个“模板+签名”组合作为一个子项，每个子项内支持多个号码，示例：发送内容json数组（base64编码前）：[{"TemplateId": "UTA20212831C85C", "SigContent": "UCloud", "Target": [{"TemplateParams": ["123456"], "Phone": "18500000123", "ExtendCode": "123", "UserId": "456"} ] } ]   。json数组中各参数的定义："TemplateId":模板ID，"SigContent"短信签名内容，"Target"具体到号码粒度的发送内容。"Target"中的具体字段有："TemplateParams"实际发送的模板参数（若使用的是无参数模板，该参数不能传值），"Phone"手机号码, "ExtendCode"短信扩展码, "UserId"自定义业务标识ID。其中必传参数为"TemplateId", "SigContent", "Target"（"Target"中必传参数为"Phone"）。实际调用本接口时TaskContent传值（发送内容base64编码后）为：W3siVGVtcGxhdGVJZCI6ICJVVEEyMDIxMjgzMUM4NUMiLCAiU2lnQ29udGVudCI6ICJVQ2xvdWQiLCAiVGFyZ2V0IjogW3siVGVtcGxhdGVQYXJhbXMiOiBbIjEyMzQ1NiJdLCAiUGhvbmUiOiAiMTg1MDAwMDAxMjMiLCAiRXh0ZW5kQ29kZSI6ICIxMjMiLCAiVXNlcklkIjogIjQ1NiJ9IF0gfSBdIA==
     *
     * @param string $taskContent
     */
    public function setTaskContent($taskContent)
    {
        $this->set("TaskContent", $taskContent);
    }
}
