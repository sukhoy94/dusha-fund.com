<?php

declare(strict_types=1);

class DushaMojaUkraina
{
    private static $participants = [
        [
            "name" => "Інна Березка",
            "imageSrc" =>  "/assets/images/participants/inna_berezka-min.jpg"
        ],
        [
            "name" => "Оксана Костюк",
            "imageSrc" => "/assets/images/participants/Oksana Kostiuk-min.jpeg"
        ],
        [
            "name" => "Марія Проценко",
            "imageSrc" => "/assets/images/participants/Mariia Protsenko-min.jpeg"
        ],
        [
            "name" => "Дарія Панасюк",
            "imageSrc" => "/assets/images/participants/Dariia Panasiuk-min.jpeg"
        ],
        [
            "name" => "Аріна Мартинюк",
            "imageSrc" => "/assets/images/participants/Arina Martyniuk-min.jpeg"
        ],
        [
            "name" => "Аля Михалатюк",
            "imageSrc" => "/assets/images/participants/alia.WEBP"
        ],
        [
            "name" => "Вікторія Наконечна",
            "imageSrc" => "/assets/images/participants/vika_nakoneczna.jpeg"
        ],
        [
            "name" => "Аліна Денисюк",
            "imageSrc" => "/assets/images/participants/Alina_Denysiuk-min.jpg"
        ],
        [
            "name" => "Вікторія Айтбаєва",
            "imageSrc" => "/assets/images/participants/vika-min.jpeg"
        ],
        [
            "name" => "Катерина Коновалова",
            "imageSrc" => "/assets/images/participants/katia.jpeg"
        ],
        [
            "name" => "Богдана Петрик",
            "imageSrc" => "/assets/images/participants/bogdana_petryk.jpeg"
        ],
        [
            "name" => "Катерина Дроздюк",
            "imageSrc" => "/assets/images/participants/kate_drozdiuk-min.jpeg"
        ],
        [
            "name" => "Вероніка Ждамарова",
            "imageSrc" => "/assets/images/participants/veronika_zdaramova-min.jpeg"
        ],
        [
            "name" => "Юлія Романюк",
            "imageSrc" => "/assets/images/participants/juliar.jpeg"
        ],
        [
            "name" => "Анна Шиманська",
            "imageSrc" => "/assets/images/participants/anna_szymanska-min.jpeg"
        ],
        [
            "name" => "Лана Бєлік",
            "imageSrc" => "/assets/images/participants/lana.jpeg"
        ]
    ];

    public static function getParticipants(): array
    {
        return self::$participants;
    }
}
