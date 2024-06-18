<?php

declare(strict_types=1);

class DushaMojaUkraina
{
    private static $participants = [
        [
            "name" => "Інна Березка",
            "imageSrc" => "https://dusha-project.com/img/participants/new/inna_berezka-min.jpg"
        ],
        [
            "name" => "Оксана Костюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/Oksana Kostiuk-min.jpeg"
        ],
        [
            "name" => "Марія Проценко",
            "imageSrc" => "https://dusha-project.com/img/participants/new/Mariia Protsenko-min.jpeg"
        ],
        [
            "name" => "Дарія Панасюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/Dariia Panasiuk-min.jpeg"
        ],
        [
            "name" => "Аріна Мартинюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/Arina Martyniuk-min.jpeg"
        ],
        [
            "name" => "Аля Михалатюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/alia.WEBP"
        ],
        [
            "name" => "Вікторія Наконечна",
            "imageSrc" => "https://dusha-project.com/img/participants/new/vika_nakoneczna.jpeg"
        ],
        [
            "name" => "Аліна Денисюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/Alina_Denysiuk-min.jpg"
        ],
        [
            "name" => "Вікторія Айтбаєва",
            "imageSrc" => "https://dusha-project.com/img/participants/new/vika-min.jpeg"
        ],
        [
            "name" => "Катерина Коновалова",
            "imageSrc" => "https://dusha-project.com/img/participants/new/katia.jpeg"
        ],
        [
            "name" => "Богдана Петрик",
            "imageSrc" => "https://dusha-project.com/img/participants/new/bogdana_petryk.jpeg"
        ],
        [
            "name" => "Катерина Дроздюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/kate_drozdiuk-min.jpeg"
        ],
        [
            "name" => "Вероніка Ждамарова",
            "imageSrc" => "https://dusha-project.com/img/participants/new/veronika_zdaramova-min.jpeg"
        ],
        [
            "name" => "Юлія Романюк",
            "imageSrc" => "https://dusha-project.com/img/participants/new/juliar.jpeg"
        ],
        [
            "name" => "Анна Шиманська",
            "imageSrc" => "https://dusha-project.com/img/participants/new/anna_szymanska-min.jpeg"
        ],
        [
            "name" => "Лана Бєлік",
            "imageSrc" => "https://dusha-project.com/img/participants/new/lana.jpeg"
        ]
    ];

    public static function getParticipants(): array
    {
        return self::$participants;
    }
}
