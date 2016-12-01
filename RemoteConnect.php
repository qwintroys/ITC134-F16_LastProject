<?php
class RemoteConnect
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw new Exception('That is not a server name!');
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }

  public function returnSampleObject()
  {
    return $this;
  }
}
?>
