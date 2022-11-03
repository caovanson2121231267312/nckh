// AssociationRule.js

'use strict';

class AssociationRule {
    constructor() {
        this.X = new Itemset();
        this.Y = new Itemset();
        this.Support = 0.0;
        this.Confidence = 0.0;
    }

    toString() {
        return this.X.toStringNoSupport() + ' => ' + this.Y.toStringNoSupport() +
            ' (Mức hỗ trợ: ' + this.Support.toFixed(2) + '%, ' +
            ' Độ tin tưởng: ' + this.Confidence.toFixed(2) + '%)';
    }
}
