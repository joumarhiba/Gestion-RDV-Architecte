<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Methods: * ");
header("Access-Control-Allow-Max-Age: 3600 ");
header("Access-Control-Allow-Headers: * ");


class ClientController
{
    public function all()
    {
        $clients = new Client();
        $results = $clients->getAllClients();

        // echo "<pre>";
        // print_r($results);
        // echo "</pre>";


        if($results){


            $array = array();
            $array['data'] = array();

            while($row = $results->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                
                $clients = array(
                    'id'=>$idClient,
                    'nom'=>$nom,
                    'prenom'=>$prenom,
                    'age'=>$age,
                    'profession'=>$profession,
                    'reference'=>$reference
                );

                array_push($array['data'],$clients);
            }
        echo json_encode($array);
        }else
        {
            echo json_encode(
                array('message'=>'no data is here')
            );
        }
    }

    // public function single($id)
    // {
    //     $client = new Client();
    //     $results = $client->getClientById($id);

    //     $array = array();
    //     $array['data'] = array();

    //     extract($results);

    //     $pizza = array(
    //         'id'=>$id,
    //         'createdBy'=>$createdBy,
    //         'date'=>$date,
    //         'elements'=>$elements
    //     );

    //     echo json_encode($pizza);
    // }

    public function add()
    {
        $data =json_decode(file_get_contents("php://input"));

        if(isset($data->prenom) & isset($data->nom) & isset($data->age) & isset($data->reference) & isset($data->profession)){
            $prenom = $data->prenom;
            $nom = $data->nom;
            $age = $data->age;
            $profession = $data->profession;
            $reference  = $data->reference ;
        }else{
            echo "there's no data ";
        }


        if(isset($createdBy) & isset($date) & isset($elements))
        {
            $posts = new Client();
            if($posts->addClient($prenom, $nom, $age, $profession, $reference )){
                echo json_encode(
                    array("message"=>"Client created")
                );
            }else
            {
                echo json_encode(
                    array("message"=>"Pizza not created")
                );
            }
        }
    }
}