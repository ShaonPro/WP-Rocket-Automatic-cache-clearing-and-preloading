# WP Rocket Automatic-cache-clearing-and-preloading
WP Rocket’s automatic cache clearing system along with conditions (i.e): when website traffic is low and only HTML, Combined/minified CSS/JavaScript files.

## Solution: A
### step 01 
- Download the rocket-clean-domain.php file. 
- Upload the file (rocket-clean-domain.php) to your WordPress installation's root ( where wp-config.php and wp-load.php are located). Example (\public_html).
- You can check this video to understand where to upload the file: [Check this Video](https://recordit.co/jbtM0WPfcw)




### Step 02
- Set-Up a cron job (when our website traffic is less).
- Example: Everyday at 6AM. 
- Check the video how to setup corn job. [Check This Video](http://recordit.co/cl2YCoMCzu)
- Make sure you have the correct path to your new file, rocket-clean-domain.php in your cron job settings.


### Note: 
If you are using WP Rocket 3.11.5 or older, just download the file: **old-rocket-clean-domain.php** and follow the same steps as above. 

## Solution: B

Hello There,
As my provided solutions not working, we have to Troubleshoot and find out why this not working, maybe we need to check the server time zone. Or we can set a corn job with 30 min or less and have to check whether it’s working or not. With my server, it’s working fine let me check by myself why it’s not working and fix the issue. 


From My Side:
First, I’ll check Our Plugin version (WP Rocket), and if an update needs I’ll do that. I’ll recheck the configuration of the plugin. After that, I’ll check the corn configuration. Make sure the file path is right and working fine. Without the invalid file path or misconfiguration that should work.


Thanks 
