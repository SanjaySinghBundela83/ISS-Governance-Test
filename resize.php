function calculateResize($widthA,$heightA,$widthB,$heightB)
{

        if($widthA != $heightA)
        {
            if($widthA > $heightA)
            {
                $t_width = $widthB;
                $t_height = (($t_width * $heightA)/$widthA);
                //fix height
                if($t_height > $heightB)
                {
                    $t_height = $heightB;
                    $t_width = (($widthA * $t_height)/$heightA);
                }
            }
            else
            {
                $t_height = $heightB;
                $t_width = (($widthA * $t_height)/$heightA);
                //fix width
                if($t_width > $widthB)
                {
                    $t_width = $widthB;
                    $t_height = (($t_width * $heightA)/$widthA);
                }
            }
        }
        else
            $t_width = $t_height = min($heightB,$widthB);

        return array('height'=>(int)$t_height,'width'=>(int)$t_width);
    }
