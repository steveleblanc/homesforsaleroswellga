(function() {
    var widgetID = 53870;
    var agentHeaderID = null;
    var clientLevel = -1;

    if (!widgetID) {
        alert('Invalid widget ID given.');
        return false;
    }

    function widgetMainOut() {
        var src = (!isNaN(widgetID)) ? 'quicksearchjs.php?widgetid=53870' : 'quicksearchjs.php';
        var widgetElement = idx('script[src$="'+src+'"]');

        // check for a dynamic widget
        if (!widgetElement.size()) {
            var widgetSrc = idx('#idxwidgetsrc-53870');
            if (widgetSrc.size()) {
                widgetElement = widgetSrc;
            }
        }

        var maincID = 'IDX-quicksearch-53870';
    var formID = 'IDX-quicksearchForm-53870';

    idx('body').on('submit','#'+formID,function(e) {
        var disabled = [];

        // disable empty form values
        idx('input[type="text"]',this).each(function (key,val) {
            if (idx(this).val() === '') {
                idx(this).prop('disabled',true);
                disabled.push(idx(this).attr('id'));
            }
            else
                idx(this).val(idx(this).val().replace(/[^0-9]/g, ''));
        });

        idx('select',this).each(function (key,val) {
            if (idx('option:selected',this).val() === '') {
                idx(this).prop('disabled',true);
                disabled.push(idx(this).attr('id'));
            }
        });

        setTimeout(function() {
            idx.each(disabled,function(i,v) {
                idx('#'+v).attr('disabled',false);
            });
        },250);

        return true;
    });

    // open in a new window/tab
    var formTarget = '_self';

    var mainc = idx('<div />').attr({
        'id':maincID,
        'class':'IDX-quicksearchWrapper'
    }).append(
        idx('<form />').attr({
            'id':formID,
            'class':'IDX-quicksearchForm',
            'action':'http://realtorwebsiteservices.idxbroker.com/idx/results/listings',
            'method':'get',
            'target':formTarget
        })
    );
    widgetElement.after(mainc);

//     idx('#'+maincID).before('<style type="text/css">#IDX-quicksearch-53870 {text-align:right;}\
// #IDX-quicksearchForm-53870 .IDX-qsLabel {margin: 0;padding-top: 3px;}\
// #IDX-quicksearchForm-53870 .IDX-qsSelectInput {width: 180px;}\
// #IDX-quicksearchForm-53870 .IDX-qsInput {margin: 0 2px;}\
// #IDX-quicksearchForm-53870 > .IDX-qsFieldWrap {display: inline-block; text-align: left;}\
// #IDX-quicksearchForm-53870 {display: inline-block;}\#IDX-quicksearch-53870 { border-radius: 10px; -webkit-border-radius: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 5px #777; -webkit-box-shadow: 1px 1px 5px #777; } #IDX-quicksearch-53870 label { margin: 0 5px;} #IDX-qsIdxIDWrap-53870 { margin-top: 10px; } #IDX-quicksearch-53870 select { width: 100% } .IDX-qsTextInput { width: 120px } .IDX-qsFieldWrap { padding: 5px 10px; text-align: right; } #IDX-qsMinPriceLabel-53870 { float: left; } #IDX-qsMaxPriceLabel-53870 { float: left; } #IDX-qsMinBedLabel-53870 { float:left; } #IDX-qsMinSqFtLabel-53870 { float: left; }  #IDX-qsMinBathLabel-53870 { float: left; } #IDX-qsCityListLabel-53870 { float: left; } #IDX-qsIdxIDLabel-53870 { display: none; } #IDX-qsPtLabel-53870 { display: none; } #IDX-qsCityListLabel-53870 { display: none; }</style>');

        
                
            idx('#'+formID).append(
                idx('<input />').attr({
                    'id':'IDX-qsIdxID-53870',
                    'class':'IDX-qsInput IDX-qsHiddenInput',
                    'name':'idxID',
                    'type':'hidden'
                }).val('a000')
            );
            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsPtWrap-53870',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsPtLabel-53870',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsPt-53870'
                    }).text('Property Type')
                ).append(

                                                                idx('<select />').attr({
        'id':'IDX-qsPt-53870',
        'class':'IDX-qsInput IDX-qsSelectInput',
        'name':'pt'
    })
                                    )
            );

            
                
            idx('#'+formID).append(
                idx('<input />').attr({
                    'id':'IDX-qsMinPrice-53870',
                    'class':'IDX-qsInput IDX-qsHiddenInput',
                    'name':'lp',
                    'type':'hidden'
                }).val('40000')
            );
            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMaxPriceWrap-53870',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMaxPriceLabel-53870',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMaxPrice-53870'
                    }).text('Max Price')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMaxPrice-53870',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'hp',
            'type':'text'
        }).val('10000000')
                                    )
            );

            
                    
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMinBedWrap-53870',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMinBedLabel-53870',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMinBed-53870'
                    }).text('Min Bedrooms')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMinBed-53870',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'bd',
            'type':'text'
        }).val('1')
                                    )
            );

            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMinBathWrap-53870',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMinBathLabel-53870',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMinBath-53870'
                    }).text('Min Baths')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMinBath-53870',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'tb',
            'type':'text'
        }).val('1')
                                    )
            );

            
        
        idx('#'+formID).append(
        idx('<input />').attr({
            'id':'IDX-qsQuickSearch-53870',
            'class':'IDX-qsInput IDX-qsHiddenInput',
            'name':'widgetReferer',
            'type':'hidden'
        }).val('true')
    );

    idx('#'+formID).append(
        idx('<div />').attr({
            'id':'IDX-qsSubmitWrap-53870',
            'class':'IDX-qsFieldWrap'
        }).append(
            idx('<input />').attr({
                'id':'IDX-qsSubmit-53870',
                'class':'IDX-qsInput IDX-qsButtonInput',
                'type':'submit'
            }).val('Search')
        )
    );


    /**
     * handle the prop types
     */

    // cach the elements that we are going to be using
    var mlsElement = idx('#IDX-qsIdxID-'+widgetID);
    var propTypeElement = idx('#IDX-qsPt-'+widgetID);
    var qsPropTypes = {"1":"Single Family","2":"Condo\\Town Home","3":"Mobile Home","4":"Vacant Land","5":"Commercial","6":"Multi-Family","7":"Rental"};
    var qsAllPropertyTypes = null;
    var defaultIdxID = 'a000';
    var defautltPt = '';
    var currentMls = mlsElement.val();
    var initialLoad = true;

    if (qsPropTypes)
    {
        addQsPtOptions(qsPropTypes);
    }

    if (qsAllPropertyTypes)
    {
        mlsElement.change(qsPropTypeToggle);

        // set the proptypes by default
        qsPropTypeToggle();

    }

    function qsPropTypeToggle() {

        if (qsAllPropertyTypes)
        {
            currentMls = mlsElement.val();

            if (currentMls)
                addQsPtOptions(qsAllPropertyTypes[currentMls]);
        }
    }

    function addQsPtOptions(propTypes)
    {
        var options = ['<option value="all">All</option>'];
        idx.each(propTypes, function(ptID,propertyType) {

            var selected = '';
            if (propertyTypeShouldBeSelected(ptID))
                selected = ' selected="selected"';

            options.push('<option value="'+ptID+'"'+selected+'>'+propertyType+'</option>');
        });
        propTypeElement.html(options.join("\n"));
        initialLoad = false;
    }

    function propertyTypeShouldBeSelected(ptID)
    {
        // first load and pt match, yes select it!
        if (initialLoad && defautltPt == ptID) {
            return true;
        }

        // default idxID and prop type match current, yes!
        if (currentMls == defaultIdxID && defautltPt == ptID) {
            return true;
        }

        return false;
    }
        if (agentHeaderID && clientLevel === 20) {
            idx(function() {
                var widetSrc = widgetElement.attr('src');

                if (widetSrc.match(/.+quicksearchjs\.php/)) {
                    var quicksearchForm = idx('#IDX-quicksearchForm-53870');
                    quicksearchForm.append(idx('<input>').attr({
                        type: 'hidden',
                        name: 'agentHeaderID',
                        value: agentHeaderID
                    }));
                } else if (widetSrc.match(/.+leadloginwidget\.php/)) {
                    var leadLoginForm = idx('#IDX-widgetLeadLoginForm');
                    leadLoginForm.append(idx('<input>').attr({
                        type: 'hidden',
                        name: 'agentHeaderID',
                        value: agentHeaderID
                    }));
                }  else if (widetSrc.match(/.+mapwidgetjs\.php/)) {
                    idx('#IDX-map-' + widgetID).on('click', 'a[href^="http"]',  function (e) {
                        e.preventDefault();
                        var href = idx(e.target).attr('href');
                        if (href.match(/.+\?.+/)) {
                            href = href + '&agentHeaderID=' + agentHeaderID;
                        } else {
                            href = href + '?agentHeaderID=' + agentHeaderID;
                        }
                        window.location.href = href;
                    });
                } else {
                    // carousel, showcase, and slideshow
                    var detailsLinks = idx('div[id*='+widgetID+']').find('a[href*=widgetReferer]');
                    detailsLinks.each(function(index, element) {
                        var originalLink = idx(element).attr('href');
                        idx(element).attr('href', originalLink + '&agentHeaderID=' + agentHeaderID );
                    });
                }
            });
        }
    }

    // build a script tag with our version of jquery provided if it doesn't already exist
    if (typeof idx == 'undefined') {
        /**
         * fake idx object to let other widgets know the first widget has inserted jqidx.js
         * wait to jqwidx.js loaded, idx will be the jquery object.
         */
        window.idx = {};
        var jqsrc = '//d1qfrurkpai25r.cloudfront.net/graphical/javascript/jqwidx.js';

        var idxjs = document.createElement('script');
        idxjs.setAttribute('type','text/javascript');
        idxjs.setAttribute('id','idx_jquery_include_tag');
        idxjs.setAttribute('src',jqsrc);

        // lets let IE in or he'll just sit outside and drink and cry
        if (idxjs.readyState) {
            idxjs.onreadystatechange = function () {
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    widgetMainOut();
                }
            };
        }
        // For gooder browsers
        else {
            idxjs.onload = widgetMainOut;
        }
        // for loading speed our best bet is to insert our jquery before the first script tag on their site since, at minimum,
        // this widget is being loaded in a script tag, we know there's at least 1 in the document and we know for sure this
        // will load before any version of jquery on their site so that we can sequester our version behind noConflict
        var s1 = document.getElementsByTagName('script')[0];
        s1.parentNode.insertBefore(idxjs, s1);
    }
    // if the idx jquert is loaded then we need to wait until the idx val is defined
    else {
        // wait to the first widget's idx jquery object loaded
        var callWidgetOut = function () {
            if (window.idx && window.idx.fn) {
                widgetMainOut();
            } else {
                setTimeout(function() {
                    callWidgetOut();
                }, 500);
            }
        };
        callWidgetOut();
    }
})();

