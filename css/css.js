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
        
    if($('.boxSpan').hasClass('bi-box-arrow-right') ){
        $.session.set('menu','menugauche');
    }
    if($('.boxSpan').hasClass('bi-box-arrow-left') ){
        // alert('ok');
        $.session.remove('menu');
    }
    //     if($('#dimi').width()<2){
    //         $.session.remove('menu');
    //         $.session.set('menu','hidden');
    // }
    // else{
    //     $.session.set('menu','hidden');
    // }
    } 
    // if($.session.get('menu')=='hgidden'){
    //     $('#dimi').css({'width':'0px', 'overflow':'hidden'});
    // }
    $(document).ready(function(){
        // $.session.remove('menu');
        
        if($.session.get('menu')=='menugauche'){
            // alert($.session.get('menu'));
            $('.boxSpan').toggleClass('bi-box-arrow-right bi-box-arrow-left');
            $('#dimi').stop().animate({width: "toggle", overflow: 'hidden'},0);
        }
    });
</script>