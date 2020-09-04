<?php
namespace App\Http\helpers;
use Illuminate\Support\Facades\Auth;


class UtilityHelpers{
    public static function deleteItemFromDB($model, $id)
    {
        try {
            $record = $model::find($id);
            $record->delete();
            return redirect()->back()->with('success', "Delete operation was successful.");
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong while performing the delete operation. Please try again.');
        }
    }

    public static function generateRandomFilename($extension){
        $filename = now() . rand(1903, 999999) . Auth::user()->id . '.' . $extension;
        return $filename;
    }

    public static function createBase64File($path){
                $certificate_file = file_get_contents($path);
                $base64_cert = base64_encode($certificate_file);
                return $base64_cert;
    }

    public static function isAllFieldsCompleted($data, $exempted_fields){
         $fields = array_keys($data->toArray() );
        foreach ($fields as $key => $value) {
            if (in_array($value, $exempted_fields)) {
                continue;
            } else {
                if ($data[$value] == null || $data[$value] == '') {
                    return false;
                }else{
                }
            }
        }
        return true;
    }

    public static function getBase64FileType($encoded){
        $data = base64_decode($encoded);
        $f = finfo_open();
        return finfo_buffer($f,$data,FILEINFO_MIME_TYPE);
    }

    public static function uploadFileToServer($file,$upload_path){
        try{
            $bid_document_extension = $file->getClientOriginalExtension();
            $file_name = substr(md5(rand(9494,999485984)),10,15).time().'.'.$bid_document_extension;
            $file->move(public_path().$upload_path, $file_name);
            return $upload_path . $file_name;
        }catch(Exception $e){
            throw (new Exception("Failed to upload the file."));
        }
                
    }

    public static function removeFileFromServer($path){
        if(file_exists( public_path($path))){
            unlink(public_path($path));
        }
    }

    public static function humanTime($time){
        return date('d M, Y H:i:s',strtotime($time));
    }

    // ADDS A NUMBER OF MONTHS TO THE SPECIFIED DATE
    private static function add_months($months, DateTime $dateObject) 
    {
        $next = new DateTime($dateObject->format('Y-m-d'));
        $next->modify('last day of +'.$months.' month');

        if($dateObject->format('d') > $next->format('d')) {
            return $dateObject->diff($next);
        } else {
            return new DateInterval('P'.$months.'M');
        }
    }
// RETURN DATE WITH ADDITIONAL MONTHS
//  RECEIVES DATE IN Y-m-d format
public static function endCycle($d1, $months)
    {
        $date = new DateTime($d1);

        // call second function to add the months
        $newDate = $date->add(self::add_months($months, $date));

        // goes back 1 day from date, remove if you want same day of month
        $newDate->sub(new DateInterval('P1D')); 

        //formats final date to Y-m-d form
        $dateReturned = $newDate->format('Y-m-d H:i:s'); 

        return $dateReturned;
    }

    public static function jsonReport($title, $message, $type = 'error'){
        return json_encode([
           'title' => $title,
           'message' => $message,
           'type' => $type
        ]);
    }
}