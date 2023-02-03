function calculateResize($widthA,$heightA,$widthB,$heightB)
{

        $o_w = $widthA;
    $o_h = $heightA;
    $m_w = $widthB;
    $m_h = $heightB;

    $c_w = $m_w / $o_w;
    $c_h = $m_h / $o_h;

    if($o_w == $o_h){
            $n_w = ($n_w >= $n_h)?$n_w:$n_h;
            $n_h = $n_w;
    } else {
            if( $c_w > $c_h ) {
                $n_w = $m_w;
                $n_h = $o_h * ($n_w/$o_w);
            } else {
                $n_h = $m_h;
                $n_w = $o_w * ($n_h/$o_h);
            }
    }
        return 'height : '.((int)$n_h).' width : '.((int)$n_w);
    }
