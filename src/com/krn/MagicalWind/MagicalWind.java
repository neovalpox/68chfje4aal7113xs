package com.krn.MagicalWind;

import android.content.pm.ActivityInfo;
import android.os.Bundle;
import android.webkit.WebView;
import org.apache.cordova.*;

public class MagicalWind extends DroidGap
{
    @Override
    public void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        super.init();
        orientation orientation = new orientation(this, appView);
        appView.addJavascriptInterface(orientation, "orientation");
        
        setRequestedOrientation (ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);
//        super.loadUrl(Config.getStartUrl(), 0);
        // Set by <content src="index.html" /> in config.xml
        super.setIntegerProperty("splashscreen", R.drawable.splash);
        super.loadUrl("file:///android_asset/www/index.html", 10000);
    }
    @Override
    public void onBackPressed()
    {
       //logic here
    }
    public class orientation {
        private WebView mAppView;
        private DroidGap mGap;
        public orientation(DroidGap gap, WebView view) {
        mAppView = view;
        mGap = gap;
        }

        public void changeLandscape() {
            setRequestedOrientation (ActivityInfo.SCREEN_ORIENTATION_LANDSCAPE);
        }

        public void changePortrait() {
            setRequestedOrientation (ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);
        }
    }
}
