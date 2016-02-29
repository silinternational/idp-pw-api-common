# idp-pw-api-common
Common interfaces and bases classes for integration components. 

## Personnel
When integrating with different personnel systems, a class is needed that extends
```yii\base\Component``` and implements the ```Sil\IdpPw\Common\Personnel\PersonnelInterface```.

This is then configured in ```common\config\local.php``` under ```['components']['personnel']```.