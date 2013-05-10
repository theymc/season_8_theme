var RandomNumber = (function(){
    var RandomNumber = function(low,high){
        this.randBase = Math.random();
        this.randFloat = (this.randBase*(high - low)) + low;
    };
    RandomNumber.prototype = {
        getInt: function(){
            this.randInt = Math.floor(this.randFloat);
            return this.randInt;
        },
        getFloat: function(){
            return this.randFloat;
        }
    };
    return RandomNumber;
})();
