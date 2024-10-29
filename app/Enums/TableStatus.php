<?php

namespace App\Enums;

enum TableStatus: string
{
    case EnAttente = 'pending';
    case Disponible = 'avaliable';
    case Indisponible = 'unavaliable';
}
