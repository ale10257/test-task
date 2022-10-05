<?php

namespace testTask\services;

class AddRemoveCurrency
{
    private const STORE_FILE = 'currency.json';
    private string $file;

    public function __construct ()
    {
        $this->file = dirname(__DIR__) . '/store/' . self::STORE_FILE;
        if (!is_file($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    public function addCurrency(string $currency)
    {
        $data = json_decode(file_get_contents($this->file), true);
        if (empty($data[$currency])) {
            $data[$currency] = $currency;
        }
        file_put_contents($this->file, json_encode($data));
    }
}