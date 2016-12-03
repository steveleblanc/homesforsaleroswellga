(function() {
    var widgetID = 25188;
    var agentHeaderID = null;
    var clientLevel = -1;

    if (!widgetID) {
        alert('Invalid widget ID given.');
        return false;
    }

    function widgetMainOut() {
        var src = (!isNaN(widgetID)) ? 'quicksearchjs.php?widgetid=25188' : 'quicksearchjs.php';
        var widgetElement = idx('script[src$="'+src+'"]');

        // check for a dynamic widget
        if (!widgetElement.size()) {
            var widgetSrc = idx('#idxwidgetsrc-25188');
            if (widgetSrc.size()) {
                widgetElement = widgetSrc;
            }
        }

        var maincID = 'IDX-quicksearch-25188';
    var formID = 'IDX-quicksearchForm-25188';

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

    idx('#'+maincID).before('<style type="text/css">#IDX-quicksearch-25188 {width:250px;}\#IDX-quicksearch-25188 { border-radius: 10px; -webkit-border-radius: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 5px #777; -webkit-box-shadow: 1px 1px 5px #777; } #IDX-quicksearch-25188 label { margin: 0 5px;} #IDX-qsIdxIDWrap-25188 { margin-top: 140px; } #IDX-quicksearch-25188 select { width: 100% } .IDX-qsTextInput { width: 120px } .IDX-qsFieldWrap { padding: 5px 10px; text-align: right; } #IDX-qsMinPriceLabel-25188 { float: left; } #IDX-qsMaxPriceLabel-25188 { float: left; } #IDX-qsMinBedLabel-25188 { float:left; } #IDX-qsMinSqFtLabel-25188 { float: left; }  #IDX-qsMinBathLabel-25188 { float: left; } #IDX-qsCityListLabel-25188 { float: left; } #IDX-qsIdxIDLabel-25188 { display: none; } #IDX-qsPtLabel-25188 { display: none; } #IDX-qsCityListLabel-25188 { display: none; } </style>');

        
                    
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsPtWrap-25188',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsPtLabel-25188',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsPt-25188'
                    }).text('Property Type')
                ).append(

                                                                idx('<select />').attr({
        'id':'IDX-qsPt-25188',
        'class':'IDX-qsInput IDX-qsSelectInput',
        'name':'pt'
    })
                                    )
            );

            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMinPriceWrap-25188',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMinPriceLabel-25188',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMinPrice-25188'
                    }).text('Min Price')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMinPrice-25188',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'lp',
            'type':'text'
        }).val('100000')
                                    )
            );

            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMaxPriceWrap-25188',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMaxPriceLabel-25188',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMaxPrice-25188'
                    }).text('Max Price')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMaxPrice-25188',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'hp',
            'type':'text'
        }).val('500000')
                                    )
            );

            
                    
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMinBedWrap-25188',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMinBedLabel-25188',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMinBed-25188'
                    }).text('Min Bedrooms')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMinBed-25188',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'bd',
            'type':'text'
        }).val('1')
                                    )
            );

            
                
            idx('#'+formID).append(
                idx('<div />').attr({
                    'id':'IDX-qsMinBathWrap-25188',
                    'class':'IDX-qsFieldWrap'
                }).append(
                    idx('<label />').attr({
                        'id':'IDX-qsMinBathLabel-25188',
                        'class':'IDX-qsLabel',
                        'for':'IDX-qsMinBath-25188'
                    }).text('Min Baths')
                ).append(

                                                                idx('<input />').attr({
            'id':'IDX-qsMinBath-25188',
            'class':'IDX-qsInput IDX-qsTextInput',
            'name':'tb',
            'type':'text'
        }).val('1')
                                    )
            );

            
                idx('#'+formID).append(
            idx('<input />').attr({
                'id':'IDX-qsCCZHidden-25188',
                'class':'IDX-qsInput IDX-qsHiddenInput',
                'name':'ccz',
                'type':'hidden'
            }).val('city')
        );
        idx('#'+formID).append(
            idx('<div />').attr({
                'id':'IDX-qsCityListWrap-25188',
                'class':'IDX-qsFieldWrap'
            }).append(
                idx('<label />').attr({
                    'id':'IDX-qsCityListLabel-25188',
                    'class':'IDX-qsLabel',
                    'for':'IDX-qsCityList-25188'
                }).text('City')
            ).append(
                idx('<select />').attr({
                    'id':'IDX-qsCityList-25188',
                    'class':'IDX-qsInput IDX-qsSelectInput',
                    'name':'city[]'
                })
            )
        );

        idx('#IDX-qsCityList-25188').append(
            idx('<option />').attr('class','IDX-qsOption').val('').text('Choose a City')
        );
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('789').prop('selected',false).text('Aloma, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('2150').prop('selected',false).text('Aventura, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('2377').prop('selected',false).text('Bal Harbour, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('2741').prop('selected',false).text('Bartow, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('2888').prop('selected',false).text('Bay Harbor Islands, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('3381').prop('selected',false).text('Belle Glade, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('3405').prop('selected',false).text('Belleair Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('4069').prop('selected',false).text('Big Torch Key, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('53129').prop('selected',false).text('Biscayne Gardens, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('4193').prop('selected',false).text('Biscayne Park, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('4792').prop('selected',false).text('Boca Raton, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('5235').prop('selected',false).text('Boynton Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('5364').prop('selected',false).text('Brandon, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('7385').prop('selected',false).text('Carol City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('9326').prop('selected',false).text('Cloud Lake, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('9495').prop('selected',false).text('Coconut Creek, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('9496').prop('selected',false).text('Coconut Grove, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('10171').prop('selected',false).text('Cooper City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('10245').prop('selected',false).text('Coral Gables, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('10247').prop('selected',false).text('Coral Springs, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11256').prop('selected',false).text('Cutler Ridge, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11458').prop('selected',false).text('Dania, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11591').prop('selected',false).text('Davie, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11673').prop('selected',false).text('Daytona Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11845').prop('selected',false).text('Deerfield Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('11984').prop('selected',false).text('Delray Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('12543').prop('selected',false).text('Doral, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('12683').prop('selected',false).text('Dowling Park, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('53128').prop('selected',false).text('Eastern Shores, Florida')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('13752').prop('selected',false).text('Eatonville, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('14084').prop('selected',false).text('El Portal, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('15083').prop('selected',false).text('Eustis, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('15146').prop('selected',false).text('Everglades City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('16030').prop('selected',false).text('Fisher Island, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('16241').prop('selected',false).text('Florida City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('16567').prop('selected',false).text('Fort Lauderdale, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('16609').prop('selected',false).text('Fort Myers Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('16617').prop('selected',false).text('Fort Pierce, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('18337').prop('selected',false).text('Golden Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('18556').prop('selected',false).text('Goulds, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('19046').prop('selected',false).text('Greenacres, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('19677').prop('selected',false).text('Haines Creek, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('19733').prop('selected',false).text('Hallandale, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('20475').prop('selected',false).text('Haverhill, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21021').prop('selected',false).text('Hialeah, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21022').prop('selected',false).text('Hialeah Gardens, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21161').prop('selected',false).text('Highland Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21294').prop('selected',false).text('Hillsboro Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21435').prop('selected',false).text('Hobe Sound, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21525').prop('selected',false).text('Holiday, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21619').prop('selected',false).text('Hollywood, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('21701').prop('selected',false).text('Homestead, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22329').prop('selected',false).text('Hutchinson Island, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22374').prop('selected',false).text('Hypoluxo, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22500').prop('selected',false).text('Indian Creek, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22521').prop('selected',false).text('Indian Lake Estates, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22819').prop('selected',false).text('Islamorada, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('23292').prop('selected',false).text('Jensen Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('23621').prop('selected',false).text('Jupiter, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('23924').prop('selected',false).text('Kendall, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('24126').prop('selected',false).text('Key Biscayne, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('24129').prop('selected',false).text('Key Largo, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('24461').prop('selected',false).text('Kissimmee, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25042').prop('selected',false).text('Lake Clarke Shores, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25257').prop('selected',false).text('Lake Worth, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25268').prop('selected',false).text('Lakeland, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25570').prop('selected',false).text('Lantana, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25698').prop('selected',false).text('Lauderdale by the Sea, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25700').prop('selected',false).text('Lauderdale Lakes, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('25701').prop('selected',false).text('Lauderhill, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('26408').prop('selected',false).text('Lighthouse Point, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('27457').prop('selected',false).text('Loxahatchee, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('27521').prop('selected',false).text('Ludlam, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('28472').prop('selected',false).text('Margate, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29554').prop('selected',false).text('Medley, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29920').prop('selected',false).text('Miami, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29928').prop('selected',false).text('Miami Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29931').prop('selected',false).text('Miami Gardens, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29932').prop('selected',false).text('Miami Lakes, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29933').prop('selected',false).text('Miami Shores, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29934').prop('selected',false).text('Miami Springs, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29991').prop('selected',false).text('Middleburg, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('30575').prop('selected',false).text('Miramar, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31255').prop('selected',false).text('Morriston, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31759').prop('selected',false).text('Mulberry, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31840').prop('selected',false).text('Murphy, North Carolina')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31895').prop('selected',false).text('Myakka City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31978').prop('selected',false).text('Naples, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31998').prop('selected',false).text('Naranja, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33217').prop('selected',false).text('North Bay Village, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33401').prop('selected',false).text('North Lauderdale, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33437').prop('selected',false).text('North Miami, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33439').prop('selected',false).text('North Miami Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33467').prop('selected',false).text('North Palm Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33908').prop('selected',false).text('Oak Ridge, ILLINOIS')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33970').prop('selected',false).text('Oakland, MISSOURI')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33961').prop('selected',false).text('Oakland, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33984').prop('selected',false).text('Oakland Park, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('34088').prop('selected',false).text('Ocean Ridge, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('34555').prop('selected',false).text('Opa Locka, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45').prop('selected',false).text('Other, Pennsylvania')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('48').prop('selected',false).text('Other, South Carolina')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('41').prop('selected',false).text('Other, Ohio')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('38').prop('selected',false).text('Other, North Carolina')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('37').prop('selected',false).text('Other, New York')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('50').prop('selected',false).text('Other, Tennessee')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36').prop('selected',false).text('Other, New Mexico')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('56').prop('selected',false).text('Other, Washington')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('57').prop('selected',false).text('Other, West Virginia')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('55').prop('selected',false).text('Other, Virginia')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('53').prop('selected',false).text('Other, Vermont')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('51').prop('selected',false).text('Other, Texas')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('58').prop('selected',false).text('Other, Wisconsin')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('22').prop('selected',false).text('Other, Louisiana')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('13').prop('selected',false).text('Other, Georgia')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('18').prop('selected',false).text('Other, Indiana')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('12').prop('selected',false).text('Other, Florida')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('8').prop('selected',false).text('Other, Connecticut')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('5').prop('selected',false).text('Other, Arkansas')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('6').prop('selected',false).text('Other, California')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('19').prop('selected',false).text('Other, Iowa')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('23').prop('selected',false).text('Other, Maine')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('31').prop('selected',false).text('Other, Montana')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('33').prop('selected',false).text('Other, Nevada')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('29').prop('selected',false).text('Other, Mississippi')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('27').prop('selected',false).text('Other, Michigan')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('26').prop('selected',false).text('Other, Massachusetts')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35').prop('selected',false).text('Other, New Jersey')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('34989').prop('selected',false).text('Oviedo, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35008').prop('selected',false).text('Owensboro, KENTUCKY')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35209').prop('selected',false).text('Palm Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35210').prop('selected',false).text('Palm Beach Gardens, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35213').prop('selected',false).text('Palm Coast, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35218').prop('selected',false).text('Palm Springs, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35222').prop('selected',false).text('Palma Ceia, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35256').prop('selected',false).text('Palmetto Bay, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('35555').prop('selected',false).text('Parkland, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36025').prop('selected',false).text('Pembroke Park, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36026').prop('selected',false).text('Pembroke Pines, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36122').prop('selected',false).text('Pensacola, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36201').prop('selected',false).text('Perrine, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36672').prop('selected',false).text('Pinecrest, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('36936').prop('selected',false).text('Plantation, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('37237').prop('selected',false).text('Polk City, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('37281').prop('selected',false).text('Pompano Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('37459').prop('selected',false).text('Port Saint Lucie, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('39078').prop('selected',false).text('Reunion, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('39622').prop('selected',false).text('Riviera Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('40434').prop('selected',false).text('Royal Palm Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('40829').prop('selected',false).text('Saint Cloud, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('41918').prop('selected',false).text('Sea Ranch Lakes, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('43749').prop('selected',false).text('South Miami, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('43962').prop('selected',false).text('Southwest Ranches, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45053').prop('selected',false).text('Stuart, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45347').prop('selected',false).text('Sunny Isles Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45372').prop('selected',false).text('Sunrise, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45427').prop('selected',false).text('Surfside, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45566').prop('selected',false).text('Sweetwater, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45792').prop('selected',false).text('Tamarac, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('45808').prop('selected',false).text('Tampa Palms, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('47540').prop('selected',false).text('University of Tampa, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('48968').prop('selected',false).text('Vero Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('49280').prop('selected',false).text('Village of Palmetto Bay, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('50530').prop('selected',false).text('Wellington, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('50630').prop('selected',false).text('Wesley Chapel, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('50891').prop('selected',false).text('West Hollywood, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('50960').prop('selected',false).text('West Miami, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('51006').prop('selected',false).text('West Palm Beach, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('51272').prop('selected',false).text('Weston, FLORIDA')
            );

        
                        
            idx('#IDX-qsCityList-25188').append(
                idx('<option />').attr('class','IDX-qsOption').val('52108').prop('selected',false).text('Wilton Manors, FLORIDA')
            );

                    idx('#IDX-quicksearchForm-25188').submit(function(evt) {
                if (idx('#IDX-qsCityList-25188').val() === '')
                {
                    evt.preventDefault();
                    var params = idx.param(idx('#IDX-quicksearchForm-25188 input[type!=submit]'));
                    params += '&' + idx.param(idx('#IDX-quicksearchForm-25188 select').has('option:selected[value!=""]'));
                    params = params.replace(/&$/,'');
                    var cityParams = idx.param(idx('#IDX-qsCityList-25188 > option[value!=""]')).replace(/undefined/g, 'city[]');
                    var url = idx('#IDX-quicksearchForm-25188').attr('action') + "?" + params + '&' + cityParams;
                    window.location = url;
                }
            });
            
        idx('#'+formID).append(
        idx('<input />').attr({
            'id':'IDX-qsQuickSearch-25188',
            'class':'IDX-qsInput IDX-qsHiddenInput',
            'name':'widgetReferer',
            'type':'hidden'
        }).val('true')
    );

    idx('#'+formID).append(
        idx('<div />').attr({
            'id':'IDX-qsSubmitWrap-25188',
            'class':'IDX-qsFieldWrap'
        }).append(
            idx('<input />').attr({
                'id':'IDX-qsSubmit-25188',
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
    var defaultIdxID = '';
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
                    var quicksearchForm = idx('#IDX-quicksearchForm-25188');
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


