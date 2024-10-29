<?php

namespace App\Enums;

enum TableLocation: string
{
    case Devant = 'front';
    case Interieur = 'inside';
    case Exterieur = 'outside';
}
