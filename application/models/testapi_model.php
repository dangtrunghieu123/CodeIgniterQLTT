
<?php
class Testapi_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function test(){
        echo "thu oc cho";
    }
    function confirm()
    {
        // $this->load->helper('testapi_helper');
        $res=callAPI("fpo.vn:3010/idiom/getAll ","");
        return $res;
    }

    function getDetail($idiomId){
        $curl_post_data = array(
            'idiomId' => $idiomId
        );
        echo json_encode($curl_post_data);
        $res=callAPI("fpo.vn:3010/idiom/getById ", json_encode($curl_post_data));
        return $res;
    }
    function create($author,$sentence){
        $curl_post_data = array(
            'author'  => $author, 
            'sentence' => $sentence
        );
        //echo json_encode($curl_post_data);
        $res = callAPI("fpo.vn:3010/idiom/create ",json_encode($curl_post_data));
        return $res;
    }
    function delete($id){
        $curl_post_data = array(
            'idiomId' => $id
        );
        echo json_encode($curl_post_data);
        $res=callAPI("fpo.vn:3010/idiom/delete  ", json_encode($curl_post_data));
        return $res;
    }
    function update($id,$author,$sentence){
        $curl_post_data = array(
            'idiomId' => $id,
            'author'  => $author, 
            'sentence' => $sentence
        );
        // echo json_encode($curl_post_data);
        $res=callAPI("fpo.vn:3010/idiom/update ", json_encode($curl_post_data));
        return $res;
    }

    function insert_data($data){
        $this->db->insert('sinhvien',$data);
    }
}

?>


