<?php
//Avec des structure ifelseIf
$note = 16;

if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($note == 5)
{
    echo "Tu es tr�s mauvais";
}

elseif ($note == 7)
{
    echo "Tu es mauvais";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste�";
}

elseif ($note == 12)
{
    echo "Tu es assez bon";
}

elseif ($note == 16)
{
    echo "Tu te d�brouilles tr�s bien !";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !";
}

else
{
    echo "D�sol�, je n'ai pas de message � afficher pour cette note";
}

//Avec structure switch
$note = 10;

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas o� $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas o� $note vaut 5
        echo "Tu es tr�s mauvais";
    break;
    
    case 7: // dans le cas o� $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste�";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te d�brouilles tr�s bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "D�sol�, je n'ai pas de message � afficher pour cette note";
}
?>