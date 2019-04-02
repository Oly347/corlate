<?php

class employee_inc{

 private $db_con;
 function employee_inc()
	{
	 $this->db_con=new clsConnection;

    }
    
    

 public function InsertIntotempUser($post_fileds)
  {
  $sSql="SELECT * FROM login_id WHERE id=-1";
  $insrt_id=$this->db_con->RowInsertId($post_fileds,$sSql);
  ;
  if($insrt_id>0)
   {
    return $insrt_id;
    }
    else
    {
    return 0;
    }
            
    }  
   function getEmployee(){
    $sSql = "SELECT * FROM price_list";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }

    function getPrice(){
       $sSql = "SELECT * FROM price_master";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }


    function getEmployeeById($id){
        $sSql="SELECT * FROM price_list WHERE temp_id='".$id."' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }

  
                public function InsertIntoEmployees($post_fileds)
                {
                $sSql="SELECT * FROM price_list WHERE id=-1";
                $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
                if($insrt==0)
                {
                    return false;
                }
                else
                {
                    return true;
                }
                
                }


                function SetUpdateEmployees($post_fields,$id)
                    {
                        $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                        
                        
                        echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
                        if($update==0)
                        {
                            return false;
                        }
                        else
                        {
                            return true;
                        }
                }


    function DeleteFrom($id)
       {
        $del_sql="DELETE FROM price_list WHERE id=".$id;
        $delete=$this->db_con->deleteRow($del_sql);

        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
       }



       public function InsertIntoComponentDetails($post_fileds)
       {
       $sSql="SELECT * FROM component_details WHERE id=-1";
       $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
       if($insrt==0)
       {
           return false;
       }
       else
       {
           return true;
       }
       
       }    



       public function InsertIntoOrderCheck($post_fileds)
       {
       $sSql="SELECT * FROM product_order WHERE id=-1";
       $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
       if($insrt==0)
       {
           return false;
       }
       else
       {
           return true;
       }
       
       }    





}//end of classs





class component_inc{

private $db_con;
function component_inc()
       {
        $this->db_con=new clsConnection;
   
       }
      function getEmployee(){
       $sSql = "SELECT * FROM employees";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
       function getPrice(){
          $sSql = "SELECT * FROM price_master";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
   
       function getEmployeeById($id){
           $sSql="SELECT * FROM price_list WHERE id='".$id."' ";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
       function getComponentDetails(){
        $sSql = "SELECT * FROM component_details";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
        }
    
        function getComponentDetailsCPU(){
            $sSql = "SELECT * FROM component_details_cpu";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }    


        function getComponentDetailsCPUForUser(){
            $sSql = "SELECT * FROM component_details_cpu WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  



        function getComponentDetailsCPUByList(){
            $sSql = "SELECT COUNT(id) FROM component_details_cpu";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  



        function getCPUById($id){
            $sSql="SELECT * FROM component_details_cpu WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }
    
          function getCABById($id){
            $sSql="SELECT * FROM component_details_cab WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsCABForUser(){
            $sSql = "SELECT * FROM component_details_cab WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  

          function getSMPSById($id){
            $sSql="SELECT * FROM component_details_smps WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsSMPSForUser(){
            $sSql = "SELECT * FROM component_details_smps WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  

          function getMotherBoardById($id){
            $sSql="SELECT * FROM component_details_mboard WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsMBForUser(){
            $sSql = "SELECT * FROM component_details_mboard WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  

          function getHardDriveById($id){
            $sSql="SELECT * FROM component_details_hdd WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsHDDForUser(){
            $sSql = "SELECT * FROM component_details_hdd WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  

          function getRAMById($id){
            $sSql="SELECT * FROM component_details_memory WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsRAMForUser(){
            $sSql = "SELECT * FROM component_details_memory WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  


          function getGCARDById($id){
            $sSql="SELECT * FROM component_details_graphic_card WHERE id='".$id."' ";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
          }


          function getComponentDetailsGCARDForUser(){
            $sSql = "SELECT * FROM component_details_graphic_card WHERE status = '1' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  
            
        function getComponentDetailsMB(){
                $sSql = "SELECT * FROM component_details_mboard";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
        }  
                
                

        function getComponentDetailsCB(){
                    $sSql = "SELECT * FROM component_details_cab";
                        $rows = $this->db_con->GetAllRows($sSql);
                        return $rows;
        }  

        function getComponentDetailsCBByList(){
            $sSql = "SELECT COUNT(id) FROM component_details_cab";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }  

        function getComponentDetailsSMPS(){
            $sSql = "SELECT * FROM component_details_smps";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
     }  



     function getComponentDetailsSMPSByList(){
        $sSql = "SELECT COUNT(id) FROM component_details_smps";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
    }  


     function getComponentDetailsHDD(){
        $sSql = "SELECT * FROM component_details_hdd";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
     }  


     function getComponentDetailsHDDByList(){
        $sSql = "SELECT COUNT(id) FROM component_details_hdd";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
    }  



  function getComponentDetailsMemory(){
    $sSql = "SELECT * FROM component_details_memory";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }  



   function getComponentDetailRAMByList(){
    $sSql = "SELECT COUNT(id) FROM component_details_memory";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }  




   function getComponentDetailsGraphicCard(){
    $sSql = "SELECT * FROM component_details_graphic_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }



   function getComponentDetailGCByList(){
    $sSql = "SELECT COUNT(id) FROM component_details_graphic_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }  
   
   
   function getComponentDetailsSoundCard(){
    $sSql = "SELECT * FROM component_details_sound_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 
   
   function getComponentDetailSCByList(){
    $sSql = "SELECT COUNT(id) FROM component_details_sound_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }  


   function getComponentDetailsDvdDrive(){
    $sSql = "SELECT * FROM component_details_dvd_drive";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 


   function getComponentDetailsWirelessAdapter(){
    $sSql = "SELECT * FROM component_details_wireless_adapter";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 



   function getComponentDetailsSSD(){
    $sSql = "SELECT * FROM component_details_ssd";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 

   function getComponentDetailsMonitor(){
    $sSql = "SELECT * FROM component_details_monitor";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 


   function getComponentDetailsMonitorForUser(){
    $sSql = "SELECT * FROM component_details_monitor WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 


   function getMonitorById($id){
    $sSql="SELECT * FROM component_details_monitor WHERE id='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }

   function getComponentDetailsKeyboardMouse(){
    $sSql = "SELECT * FROM component_details_keyboardmouse";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 

   function getComponentDetailsKeyBoardmouseForUser(){
    $sSql = "SELECT * FROM component_details_keyboardmouse WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 

   function getKeyboardMouseById($id){
    $sSql="SELECT * FROM component_details_keyboardmouse WHERE id='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


   function getComponentDetailsHeadphone(){
    $sSql = "SELECT * FROM component_details_headphone";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 

   function getComponentDetailsHeadphoneForUser(){
    $sSql = "SELECT * FROM component_details_headphone WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 


   function getComponentDetailsSpeaker(){
    $sSql = "SELECT * FROM component_details_speaker";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 

   function getComponentDetailsSpeakerForUser(){
    $sSql = "SELECT * FROM component_details_speaker WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 

   function getProductPCList(){
    $sSql = "SELECT * FROM add_product_pc";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 




   function getRequestPCList(){
    $sSql = "SELECT * FROM pc_request";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 


  function getProductKeyboardMouse($id){
    $sSql="SELECT * FROM component_details_keyboardmouse WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }

  function getProductMonitor($id){
    $sSql="SELECT * FROM component_details_monitor WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


  function getProductSSD($id){
    $sSql="SELECT * FROM component_details_ssd WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


  function getProductSSDForUser(){
    $sSql = "SELECT * FROM component_details_ssd WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 



  function getProductSoundCard($id){
    $sSql="SELECT * FROM component_details_sound_card WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }

  function getProductSoundCardForUser(){
    $sSql = "SELECT * FROM component_details_sound_card WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 


  function getProductWirelessAdaptor($id){
    $sSql="SELECT * FROM component_details_wireless_adapter WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


  function getProductWirelessAdaptorForUser(){
    $sSql = "SELECT * FROM component_details_wireless_adapter WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 



  function getProductDvdDrive($id){
    $sSql="SELECT * FROM component_details_dvd_drive WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }

  function getProductDVDDRIVEForUser(){
    $sSql = "SELECT * FROM component_details_dvd_drive WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 


  function getProductSpeaker($id){
    $sSql="SELECT * FROM component_details_speaker WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


  function getProductHeadPhone($id){
    $sSql="SELECT * FROM component_details_headphone WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }


   function getUserSavedItem($id){
    $sSql="SELECT * FROM save_product WHERE user_name ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }
  function getUserCartItem($id){
    $sSql="SELECT * FROM cart_item WHERE username ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }



  function getUserCartItemByID($id){
    $sSql="SELECT * FROM cart_item WHERE id ='".$id."' ";

    //echo "$sSql" ;
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }



  function getUserCartItemByUserName($id){
    $sSql="SELECT * FROM cart_item WHERE username ='".$id."' ";

    //echo "$sSql" ;
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }



  function getCoupondetailsByCouponName($id){
    $sSql="SELECT * FROM cart_item WHERE code  ='".$id."' ";

    //echo "$sSql" ;
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
  }



  function getProductPCById($id){
    $sSql="SELECT * FROM add_product_pc WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
   }
   function getComponentDetailsPCProductForUser(){
    $sSql = "SELECT * FROM add_product_pc WHERE status = '1' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
} 



   function getSavedProductByID($id){
    $sSql="SELECT * FROM save_product WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
   }

   function SetUpdateProcessor($post_fields,$id)
   {
   $sSql="SELECT * FROM component_details_cpu WHERE id='".$id."' ";
       
       
    echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
    if($update==0)
    {
           return false;
    }
       else
       {
           return true;
       }
    }
    function SetUpdateMotherBoard($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_mboard WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
    }



    function SetUpdateMonitor($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_monitor WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
    }


    function SetUpdateKeyboardMouse($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_keyboardmouse WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
    }


    function SetUpdateHeadphone($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_headphone WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
    }



    function SetUpdateSpeaker($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_speaker WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
    }








    function SetUpdateCabinet($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_cab WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }




     function SetUpdateSMPS($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_smps WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }




     function SetUpdateHardDrive($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_hdd WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }




     function SetUpdateMemory($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_memory WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }


     function SetUpdateGraphic($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_graphic_card WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }




     function SetUpdateSoundCard($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_sound_card WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }



     function SetUpdateDvdDrive($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_dvd_drive WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }



     function SetUpdateWireLess($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_wireless_adapter WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }
     function SetUpdateSSD($post_fields,$id)
    {
    $sSql="SELECT * FROM component_details_ssd WHERE id='".$id."' ";
        
        
     echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
     if($update==0)
     {
            return false;
     }
        else
        {
            return true;
        }
     }



     



        



   function getPCProductByID($id){
    $sSql="SELECT * FROM add_product_pc WHERE id ='".$id."' ";
    $rows = $this->db_con->GetAllRows($sSql);
    return $rows;
   }


   function DeleteCartItem($id)
       {
        $del_sql="DELETE FROM cart_item WHERE id=".$id;
        $delete=$this->db_con->deleteRow($del_sql);

        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
       }




       function DeleteCartItemByUser($id)
       {
        $del_sql="DELETE  FROM cart_item WHERE username='".$id."' ";

        //echo "$del_sql" ;
        $delete=$this->db_con->deleteRow($del_sql);

        // echo "$delete" ;
        // exit;

        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
       }








   function SetUpdatePCProduct($post_fields,$id)
   {
       $sSql="SELECT * FROM add_product_pc WHERE id='".$id."' ";
       
       
       echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
       if($update==0)
       {
           return false;
       }
       else
       {
           return true;
       }
    }


   
   
       function SetUpdateEmployees($post_fields,$id)
                       {
                           $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                           
                           
                           echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
                           if($update==0)
                           {
                               return false;
                           }
                           else
                           {
                               return true;
                           }
                   }
   
   
       function DeleteFrom($id)
          {
           $del_sql="DELETE FROM employees WHERE id=".$id;
           $delete=$this->db_con->deleteRow($del_sql);
   
           if($delete)
           {
               return true;
           }
           else
           {
               return $delete;
           }
          }
   
   
   
 public function InsertIntoComponentDetailsCpu($post_fileds)
  {
  $sSql="SELECT * FROM component_details_cpu WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }   
    
    


    public function InsertIntocp($post_fileds)
  {
  $sSql="SELECT * FROM coupon_code WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);

//   print_r($insrt);
//   exit;
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    




    public function InsertIntoactivetyDetails($post_fileds)
    {
    $sSql="SELECT * FROM activety_log WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
     {
      return false;
      }
      else
      {
      return true;
      }
              
      }  
    
    
    public function InsertIntoComponentDetailsMotherBoard($post_fileds)
  {
  $sSql="SELECT * FROM component_details_mboard WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    


    public function InsertIntoComponentDetailsCabinet($post_fileds)
    {
    $sSql="SELECT * FROM component_details_cab WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
    {
        return false;
        }
        else
        {
        return true;
        }
                
    }    



    public function InsertIntoComponentDetailsSmps($post_fileds)
    {
    $sSql="SELECT * FROM component_details_smps WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
    {
        return false;
        }
        else
        {
        return true;
        }
                    
    }    
    
    public function InsertIntoComponentDetailsHDD($post_fileds)
    {
    $sSql="SELECT * FROM component_details_hdd WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
     {
      return false;
      }
      else
      {
      return true;
      }
              
    }  
    
    
    public function InsertIntoComponentDetailsMemory($post_fileds)
      {
      $sSql="SELECT * FROM component_details_memory WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsGraphicCard($post_fileds)
      {
      $sSql="SELECT * FROM component_details_graphic_card WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 
    
    public function InsertIntoComponentDetailsSoundCard($post_fileds)
      {
      $sSql="SELECT * FROM component_details_sound_card WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsDvdDrive($post_fileds)
      {
      $sSql="SELECT * FROM component_details_dvd_drive WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsWirelessAdapter($post_fileds)
      {
      $sSql="SELECT * FROM component_details_wireless_adapter WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 

    public function InsertIntoComponentDetailsSSD($post_fileds)
      {
      $sSql="SELECT * FROM component_details_ssd WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 
   

    public function InsertIntoComponentDetailsMonitor($post_fileds)
      {
      $sSql="SELECT * FROM component_details_monitor WHERE id=-1";

    //   print_r($sSql);

    //   exit;
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsMouseKeyBoard($post_fileds)
      {
      $sSql="SELECT * FROM component_details_keyboardmouse WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsHeadphone($post_fileds)
      {
      $sSql="SELECT * FROM component_details_headphone WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 




    public function InsertIntoCpuMboardLink($post_fileds)
    {
    $sSql="SELECT * FROM m_board_cpu WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
     {
      return false;
      }
      else
      {
      return true;
      }
              
  } 


    public function InsertIntoComponentDetailsSpeaker($post_fileds)
      {
      $sSql="SELECT * FROM component_details_speaker WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoPCProduct($post_fileds)
      {
      $sSql="SELECT * FROM add_product_pc WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoSaveProduct($post_fileds)
      {
      $sSql="SELECT * FROM save_product WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoCartProduct($post_fileds)
    {
    $sSql="SELECT * FROM cart_item WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
     {
      return false;
      }
      else
      {
      return true;
      }
              
  } 
   
    }// class end component



    



    
   
   
   
    



    class user_inc{

        private $db_con;
        function user_inc()
               {
                $this->db_con=new clsConnection;
           
               }
              function getEmployee(){
               $sSql = "SELECT * FROM employees";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }
           
               function getPrice(){
                  $sSql = "SELECT * FROM price_master";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }


               function getUserDetails(){
                $sSql = "SELECT * FROM user";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getContactList(){
                $sSql = "SELECT * FROM contact_us";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getReturnList(){
                $sSql = "SELECT * FROM return_list";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getTotalUserList(){
                $sSql = "SELECT COUNT(id) FROM user";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }

             function getReviewListPending(){
                $sSql = "SELECT * FROM customer_review WHERE status = 'not_approved' ";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getCouponList(){
                $sSql = "SELECT * FROM coupon_code";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getReviewListFinal(){
                $sSql = "SELECT * FROM customer_review WHERE status = 'approved' ";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }



             function getReviewById($id){
                $sSql="SELECT * FROM customer_review WHERE id='".$id."' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }


            function getReturnRequestById($id){
                $sSql="SELECT * FROM return_list WHERE id='".$id."' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }



            function getOrderById($id){
                $sSql="SELECT * FROM order_details WHERE id='".$id."' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }

           
           
               function getEmployeeById($id){
                   $sSql="SELECT * FROM price_list WHERE id='".$id."' ";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }


               
           
               function getComponentDetails(){
                $sSql = "SELECT * FROM component_details";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }
            
                function checkLogin($email_id,$password){
                    $sSql="SELECT * FROM user WHERE email_id='".$email_id."' AND password='".$password."'  " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                } 



                // function checkCoupon($coupon_code){
                //     $sSql="SELECT * FROM `coupon` WHERE `coupon_code` = '$coupon_code' && `status` = 'Valid'" ;
                //     $rows = $this->db_con->GetAllRows($sSql);
                //     return $rows;
                // } 



                function checkEmailRegister($email_id){
                    $sSql="SELECT * FROM user WHERE email_id='".$email_id."' " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }


                function forgetLogin($email_id){
                    $sSql="SELECT * FROM user WHERE email_id='".$email_id."' " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }


                function OTPCHECK($otp){
                    $sSql="SELECT * FROM OTP_server WHERE otp='".$otp."' " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }



                function getUserUpdateById($id){
                    $sSql="SELECT * FROM user WHERE email_id='".$id."' ";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }



                function getUserById($id){
                    $sSql="SELECT * FROM user WHERE email_id='".$id."' ";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }
                



                function SetUpdateProfile($post_fields,$id)
                {
                $sSql="SELECT * FROM user WHERE email_id='".$id."' ";
                    
                    
                 $update=$this->db_con->RowUpdate($post_fields,$sSql);
                 if($update==0)
                 {
                        return false;
                 }
                    else
                    {
                        return true;
                    }
                 }




                 function SetUpdateReview($post_fields,$id)
                 {
                 $sSql="SELECT * FROM customer_review WHERE id='".$id."' ";
                     
                     
                $update=$this->db_con->RowUpdate($post_fields,$sSql);
                  if($update==0)
                  {
                         return false;
                  }
                     else
                     {
                         return true;
                     }
                  } 





                  function SetUpdateReturnProduct($post_fields,$id)
                  {
                  $sSql="SELECT * FROM return_list WHERE id='".$id."' ";
                      
                      
                 $update=$this->db_con->RowUpdate($post_fields,$sSql);
                   if($update==0)
                   {
                          return false;
                   }
                      else
                      {
                          return true;
                      }
                   } 


                
                function SetUpdateUserPassword($post_fields,$id)
                {
                $sSql="SELECT * FROM user WHERE email_id='".$id."' ";
                    
                    
                  $update=$this->db_con->RowUpdate($post_fields,$sSql);
                 if($update==0)
                 {
                        return false;
                 }
                    else
                    {
                        return true;
                    }
                 }






                function checkAdmin($user_name,$password){
                    $sSql="SELECT * FROM admin_details WHERE user_name='".$user_name."' AND password='".$password."'  " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                } 
           
           
               function SetUpdateEmployees($post_fields,$id)
                               {
                                   $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                                   
                                   
                                    $update=$this->db_con->RowUpdate($post_fields,$sSql);
                                   if($update==0)
                                   {
                                       return false;
                                   }
                                   else
                                   {
                                       return true;
                                   }
                           }
           
           
               function DeleteFrom($id)
                  {
                   $del_sql="DELETE FROM employees WHERE id=".$id;
                   $delete=$this->db_con->deleteRow($del_sql);
           
                   if($delete)
                   {
                       return true;
                   }
                   else
                   {
                       return $delete;
                   }
                  }
           
           
           
         public function InsertIntoUserDetails($post_fileds)
          {
          $sSql="SELECT * FROM user WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            }    
            


            public function InsertIntoContactUS($post_fileds)
          {
          $sSql="SELECT * FROM contact_us WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            }  




            public function InsertIntoRequestPC($post_fileds)
          {
          $sSql="SELECT * FROM pc_request WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            } 


            public function InsertIntoReviewList($post_fileds)
          {
          $sSql="SELECT * FROM customer_review WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            }  



            public function InsertIntoOrderList($post_fileds)
            {
            $sSql="SELECT * FROM order_details WHERE id=-1";
            $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
            if($insrt==0)
             {
              return false;
              }
              else
              {
              return true;
              }
                      
              }  



              public function InsertIntoReturnList($post_fileds)
            {
            $sSql="SELECT * FROM return_list WHERE id=-1";
            $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
            if($insrt==0)
             {
              return false;
              }
              else
              {
              return true;
              }
                      
              }  




              function SetUpdateOrder($post_fields,$id)
              {
                  $sSql="SELECT * FROM order_details WHERE id='".$id."' ";
                  
                  
                   $update=$this->db_con->RowUpdate($post_fields,$sSql);
                  if($update==0)
                  {
                      return false;
                  }
                  else
                  {
                      return true;
                  }
          }




          function SetUpdateReturnOrder($post_fields,$id)
              {
                  $sSql="SELECT * FROM order_details WHERE order_id ='".$id."' ";
                  
                  
                   $update=$this->db_con->RowUpdate($post_fields,$sSql);
                  if($update==0)
                  {
                      return false;
                  }
                  else
                  {
                      return true;
                  }
          }
            function getOrderList(){
                $sSql = "SELECT * FROM order_details";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }

            function getUserlastOrder($id){
                $sSql="SELECT * FROM order_details  WHERE username='".$id."'  ORDER BY id DESC LIMIT 0, 1";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }


            function getUserlastReturnlist($id){
                $sSql="SELECT * FROM return_list  WHERE username='".$id."'  ORDER BY id DESC LIMIT 0, 1";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }


            // function getOrderById($id){
            //     $sSql="SELECT * FROM order_details  WHERE id ='".$id."' ";
            //     $rows = $this->db_con->GetAllRows($sSql);
            //     return $rows;
            // }


            function getOrderByUser($id){
                $sSql="SELECT * FROM order_details  WHERE username  ='".$id."' ";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
            }




        public function InsertIntoFinalReviewList($post_fileds)
          {
          $sSql="SELECT * FROM final_review_list WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            }  
         
           
           
           
            }
        




?>