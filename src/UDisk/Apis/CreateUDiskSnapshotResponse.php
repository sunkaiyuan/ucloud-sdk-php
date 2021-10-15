<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Response\Response;

class CreateUDiskSnapshotResponse extends Response
{
    

    /**
     * SnapshotId: 快照Id
     *
     * @return string[]|null
     */
    public function getSnapshotId()
    {
        return $this->get("SnapshotId");
    }

    /**
     * SnapshotId: 快照Id
     *
     * @param string[] $snapshotId
     */
    public function setSnapshotId(array $snapshotId)
    {
        $this->set("SnapshotId", $snapshotId);
    }
}
