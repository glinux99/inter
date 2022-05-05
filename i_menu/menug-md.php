<div class=" d-flex ">
    <div id="dimi" class="bg">
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start ms-1" id="menu">
        <li class="nav-item text-center ">
            <a href="/actus" class="nav-link border-top border-primary">
                <i class="bi--2xl bi-globe"></i> <span class="ms-0"><?php echo _("Actualite");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_humours/humours" class="nav-link h-50">
                <i class="bi--2xl bi-chat-right-dots"></i> <span class="ms-0"><?php echo _("Humours");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_services/services" class="nav-link h-50">
                <i class="bi--2xl bi-briefcase"></i> <span class="ms-0"><?php echo _("Services");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_login/login-inscription" class="nav-link h-50">
                <i class="bi--2xl bi-person"></i> <span class="ms-0"><?php echo _("Incription");?></span>
            </a>
        </li>
        <li class="nav-item d-flex mx-auto ">
            <a href="<?php echo $dir;?>i_pdf/librairie" class="nav-link h-50 px-4">
                <i class="bi--2xl bi-file-earmark-pdf d-block ps-2"></i> <span class="ms-0 d-block"><?php echo _("Livres");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>tutoriels/tutos" class="nav-link h-50">
                <i class="bi--2xl bi-folder2-open"></i> <span class="ms-0"><?php echo _("Tutoriels");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_songs/songs" class="nav-link h-50">
                <i class="bi--2xl bi-music-note-list"></i> <span class="ms-0"><?php echo _("Songs");?></span>
            </a>
        </li>  
    </ul>
    </div>
    <div class="bg-primary  rounded-end click d-flex border-success border elmnt" style="height: 40vh" onclick="dimi();">
        <span class="bi-box-arrow-left bi--xl align-self-center m-2 boxSpan">

        </span>
    </div>
</div>
<script>
    (function($){

$.session = {

    _id: null,

    _cookieCache: undefined,

    _init: function()
    {
        if (!window.name) {
            window.name = Math.random();
        }
        this._id = window.name;
        this._initCache();

        // See if we've changed protcols

        var matches = (new RegExp(this._generatePrefix() + "=([^;]+);")).exec(document.cookie);
        if (matches && document.location.protocol !== matches[1]) {
           this._clearSession();
           for (var key in this._cookieCache) {
               try {
               window.sessionStorage.setItem(key, this._cookieCache[key]);
               } catch (e) {};
           }
        }

        document.cookie = this._generatePrefix() + "=" + document.location.protocol + ';path=/;expires=' + (new Date((new Date).getTime() + 120000)).toUTCString();

    },

    _generatePrefix: function()
    {
        return '__session:' + this._id + ':';
    },

    _initCache: function()
    {
        var cookies = document.cookie.split(';');
        this._cookieCache = {};
        for (var i in cookies) {
            var kv = cookies[i].split('=');
            if ((new RegExp(this._generatePrefix() + '.+')).test(kv[0]) && kv[1]) {
                this._cookieCache[kv[0].split(':', 3)[2]] = kv[1];
            }
        }
    },

    _setFallback: function(key, value, onceOnly)
    {
        var cookie = this._generatePrefix() + key + "=" + value + "; path=/";
        if (onceOnly) {
            cookie += "; expires=" + (new Date(Date.now() + 120000)).toUTCString();
        }
        document.cookie = cookie;
        this._cookieCache[key] = value;
        return this;
    },

    _getFallback: function(key)
    {
        if (!this._cookieCache) {
            this._initCache();
        }
        return this._cookieCache[key];
    },

    _clearFallback: function()
    {
        for (var i in this._cookieCache) {
            document.cookie = this._generatePrefix() + i + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
        this._cookieCache = {};
    },

    _deleteFallback: function(key)
    {
        document.cookie = this._generatePrefix() + key + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        delete this._cookieCache[key];
    },

    get: function(key)
    {
        return window.sessionStorage.getItem(key) || this._getFallback(key);
    },

    set: function(key, value, onceOnly)
    {
        try {
            window.sessionStorage.setItem(key, value);
        } catch (e) {}
        this._setFallback(key, value, onceOnly || false);
        return this;
    },
    
    'delete': function(key){
        return this.remove(key);
    },

    remove: function(key)
    {
        try {
        window.sessionStorage.removeItem(key);
        } catch (e) {};
        this._deleteFallback(key);
        return this;
    },

    _clearSession: function()
    {
      try {
            window.sessionStorage.clear();
        } catch (e) {
            for (var i in window.sessionStorage) {
                window.sessionStorage.removeItem(i);
            }
        }
    },

    clear: function()
    {
        this._clearSession();
        this._clearFallback();
        return this;
    }

};

$.session._init();

})(jQuery);
</script>
<script>
    function dimi(){
        $('.boxSpan').toggleClass('bi-box-arrow-right bi-box-arrow-left');
        // $('.elmnt').toggleClass('bg-primary bg');
        $('#dimi').stop().animate({width: "toggle", overflow: 'hidden'}, "slow");
        // $('#dimi').css('overflow', 'hidden');  
        $.session.set('menu','hidden');
    } 
    if($.session.get('menu')=='hidden'){
        $('#dimi').css({'width':'0px', 'overflow':'hidden'});
    }
</script>