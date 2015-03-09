<?php
class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        //return ucfirst($input_title);
        $exceptional_words = array("a","an","the","of","in","or","and");
        $input_array_of_words = explode(" ", $input_title);
        $output_titlecased = array();
        
        // foreach($input_array_of_words as $word)
        // {
        //
        //
        //         array_push($output_titlecased, ucfirst($word));
        //
        // }
        $i=0;

        for($i=0;$i<count($input_array_of_words);$i++){

            if($i==0)

            {
                array_push($output_titlecased, ucfirst($input_array_of_words[$i]));
            }

            else

            {
                for($j=0;$j<count($exceptional_words);$j++)

                {
                    if($input_array_of_words[$i] == $exceptional_words[$j])
                        {
                            array_push($output_titlecased, $input_array_of_words[$i]);
                        }


                }


                        array_push($output_titlecased, ucfirst($input_array_of_words[$i]));

            }


        }
        return implode(" ", $output_titlecased);

    }
}

?>
