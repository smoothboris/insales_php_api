<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Trait PickUpSource Часть API-клиента, отвечающая за источники ПВЗ
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait PickUpSource
{
    /**
     * Получение источника ПВЗ
     * @param int $id Идентификатор источника ПВЗ
     * @return ApiResponse
     */
    public function getPickUpSource(int $id) : ApiResponse
    {
        return $this->client->executeGetRequest(
            $this->generateUrl(self::API_URL_PICK_UP_SOURCE, $id),
            $id
        );
    }

    /**
     * Получение списка источников ПВЗ
     * @return ApiResponse
     */
    public function getPickUpSources() : ApiResponse
    {
        return $this->client->executeListRequest($this->generateUrl(self::API_URL_PICK_UP_SOURCE));
    }

    /**
     * Удаление источника ПВЗ
     * @param int $id Идентификатор источника ПВЗ
     * @return ApiResponse
     */
    public function removePickUpSource(int $id) : ApiResponse
    {
        return $this->client->executeRemoveRequest(
            $this->generateUrl(self::API_URL_PICK_UP_SOURCE, $id),
            $id
        );
    }

    /**
     * Обновление источника ПВЗ
     * @param int $id Идентификатор источника ПВЗ
     * @param array $data Массив данных
     * @return ApiResponse
     */
    public function updatePickUpSource(int $id, array $data) : ApiResponse
    {
        return $this->client->executeUpdateRequest(
            $this->generateUrl(self::API_URL_PICK_UP_SOURCE, $id),
            $data
        );
    }

    /**
     * Создание источника ПВЗ
     * @param array $data
     * @return ApiResponse
     */
    public function createPickUpSource(array $data) : ApiResponse
    {
        return $this->client->executeCreateRequest(
            $this->generateUrl(self::API_URL_PICK_UP_SOURCE),
            $data
        );
    }
}
