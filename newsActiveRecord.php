<?php
class newsActiveRecord extends CActiveRecord
{
	 /**
	 * Prepares create_time, create_user_id, date_modified and update_user_id attributes before performing validation.
	 */
	protected function beforeValidate()
	{
		//parent::beforeValidate();
		Yii::app()->setTimeZone("Europe/Sarajevo");
		
		if($this->isNewRecord)
		{
			// set the create date, last updated date and the user doing the creating  
			$this->date_created=$this->date_modified=date("Y-m-d\TH:i:s\Z", time());
      //    	$this->user_created=$this->user_modified=Yii::app()->user->id;
        }
		else
		{
			//not a new record, so just set the last updated time and last updated user id     
		$this->date_modified=date("Y-m-d\TH:i:s\Z", time());
	//	$this->user_modified=Yii::app()->user->id;
		}
		
		return parent::beforeValidate();
		//return true;
	}	
}
