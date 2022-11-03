
var _testDB = [
    'sữa, chuối, nước lọc',
    'bánh, chuối, táo',
    'sữa, bánh, chuối, táo',
    'bánh, táo',
];

console.log(_testDB);
var _db = [];
var list = [];

function SetControlBehaviors() {

    $('#GenerateDBButton').click(function () {
        // Read comma-separated items with whitespace removed
        let items = $.trim($('#ItemsTextBox').val());

        let itemsList = items.split(',');
        for (var i in itemsList) {
            itemsList[i] = $.trim(itemsList[i]);
        }

        // Generate random database
        let transCount = parseInt($.trim($('#TransCountTextBox').val()));

        _db = [];
        for (var transIndex = 0; transIndex < transCount;) {
            let itemCount = getRandomInt(1, itemsList.length);
            let itemset = [];

            for (var j = 0; j < itemCount; j += 1) {
                let itemIndex = getRandomInt(1, itemsList.length);
                let item = itemsList[itemIndex - 1];
                if (itemset.indexOf(item) < 0)
                    itemset.push(item);
            }

            if (itemset.length > 0) {
                _db.push(itemset.join(', '));
                transIndex += 1;
            }
        }

        $('#DBTextBox').val(_db.join('\n'));
    });

    // Set reset-db-button behavior
    $('#abc').click(function () {
        _db = [];
        console.log("123");
        data_fromdb.forEach(i => _db.push(i));

        $('#DBTextBox').val(_db.join('\n'));
    });

    // Set apriori-button behavior
    $('#search').click(function () {
        console.log("hello")
        let db = new ItemsetCollection();
        for (var i in _db) {
            // console.log(_db[i]);
            let items = _db[i].split(', ');
            db.push(Itemset.from(items));
        }

        let supportThreshold = 10;
        let L = AprioriMining.doApriori(db, supportThreshold);

        // ClearResult();
        AddResultLine(L.length + ' sản phẩm kết hợp có mức hỗ trợ lớn hơn mức hỗ trợ cho :');
        AddResultLine(L.join('\n'));
        // console.log(L);
        L.forEach((item)=>{
            if(item.Support>20 && item.length == 1){
                item.forEach((d)=>{
                    // console.log(d)
                    list.push(d)
                })
            }
            // console.log(item);
        })
        var html = "";
        var sp="";
        list.forEach((item)=>{
            for(var i = 0; i < h.length; i++){
                if(item == h[i].product_id){
                    console.log(h[i])
                    html += `
                    <li>
                        <a href="http://14.225.192.172/`+h[i].file +`/` +h[i].name_file +`" class="w100 mb-5 flex">
                            <div>
                                <img class="img-se" src="http://14.225.192.172/public/assets/upload/`+h[i].main_img+`">
                            </div>
                            <div class="pm">
                                <div>
                                    <p class="p1">
                                        `+h[i].name+`
                                    </p>
                                </div>
                                <div>
                                    <span class="special-price">`+h[i].sale_product+` ₫</span>
                                    <span class="old-price">`+h[i].price+` ₫</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    `;

                    sp += `
            <div class="featured__phone__product__item" style="height:auto">


                                <div class="featured__phone__product__img__wrapper">
                    <a href="http://14.225.192.172/`+h[i].file +`/` +h[i].name_file +`">
                    <img src="http://14.225.192.172/public/assets/upload/`+h[i].main_img+`" alt="`+h[i].name+`"></a>
                </div>
                <div class="featured__phone__product__desc">
                    <div class="featured__phone__product__desc__title">
                        <a href="http://14.225.192.172/`+h[i].file +`/` +h[i].name_file +`" class="featured__phone__product">
                            `+h[i].name+`
                        </a>
                    </div>
                    <div class="featured__phone__product__desc__price">
                        <div class="featured__phone__product__desc__price__new">
                            <p>
                                `+h[i].sale_product+`
                                <span class="featured__phone__product__desc__price__unit__new">đ</span>
                            </p>
                        </div>
                        <div class="featured__phone__product__desc__price__old">
                            <p>
                                `+h[i].price+`
                                <span class="featured__phone__product__desc__price__unit__old">đ</span>
                            </p>
                        </div>
                    </div>


                </div>
            </div>
                    `;
                    break;
                }
            }
            // h.forEach((d)=>{

            //         return false;
            //     }
            // })
        })
        $('#add-search').prepend(html);
        try {
            $('#pro-add').prepend(sp);
        } catch(e) {
            // statements
            console.log(e);
        }
        html ="";
        h.length = 0;
        AddResultLine('');

        // Step2: Build rules based on large itemsets and confidence threshold
        let confidenceThreshold = 10;
        let allRules = AprioriMining.mine(db, L, confidenceThreshold);
        AddResultLine(allRules.length + " Association Rules");
        AddResultLine(allRules.join('\n'));
        // console.log(allRules);
    });
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function AddResultLine(text) {
    $('#ResultTextBox').val($('#ResultTextBox').val() + text + '\n');
}

function ClearResult(text) {
    $('#ResultTextBox').val('');
}

function testObjects() {
    var is = new ItemsetCollection();
    is.push(Itemset.from(['ab','bc','c']));
    is.push(Itemset.from(['a','e','f']));
    is.push(Itemset.from(['d','n']));
    //alert(is.getUniqueItems());
    //alert('Support:' + is.findSupport(Itemset.from(['d','n'])));
    
    var i = Itemset.from(['a','b']);
    i.Support = 40;
    //alert(i);
    //alert(i.includesItemset(Itemset.from(['b','a'])));
    //alert('Removed:' + i.removeItemset(Itemset.from(['a'])));

    var rule1 = new AssociationRule();
    rule1.X = Itemset.from(['a','b']);
    rule1.Y = Itemset.from(['c']);
    rule1.Support = 45.857;
    rule1.Confidence = 80;
    //alert(rule1);

    //alert(Bit.decimalToBinary(16, 6));
    //alert(Bit.decimalToBinary(15, 6));

    //alert(Bit.getOnCount(16, 6));
    //alert(Bit.getOnCount(15, 6));

    //alert(Bit.findSubsets(Itemset.from(['a','b','c','d']), 0));
}
