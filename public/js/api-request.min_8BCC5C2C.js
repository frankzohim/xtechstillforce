!function(a){function b(a){return a=b.buildAjaxOptions(a),b.transport(a)}var c=window.wpApiSettings;b.buildAjaxOptions=function(b){var d,e,f,g,h,i,j=b.url,k=b.path;if("string"==typeof b.namespace&&"string"==typeof b.endpoint&&(d=b.namespace.replace(/^\/|\/$/g,""),e=b.endpoint.replace(/^\//,""),k=e?d+"/"+e:d),"string"==typeof k&&(f=c.root,k=k.replace(/^\//,""),"string"==typeof f&&-1!==f.indexOf("?")&&(k=k.replace("?","&")),j=f+k),h=!(b.data&&b.data._wpnonce),g=b.headers||{},h)for(i in g)if(g.hasOwnProperty(i)&&"x-wp-nonce"===i.toLowerCase()){h=!1;break}return h&&(g=a.extend({"X-WP-Nonce":c.nonce},g)),b=a.extend({},b,{headers:g,url:j}),delete b.path,delete b.namespace,delete b.endpoint,b},b.transport=a.ajax,window.wp=window.wp||{},window.wp.apiRequest=b}(jQuery);