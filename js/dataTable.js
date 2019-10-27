var car = {};

var Person = function(name) {
    this.name = name;
    this.canTalk = true;
  };
  
  Person.prototype.greet = function() {
    if (this.canTalk) {
      console.log('Hi, I am ' + this.name);
    }
  };
  
var dataTable = {
    numElements: 0,
    elementsTable: [],
    car: null,
    person: null,

    init: function (elementsTable) {
        self = this;
        this.elementsTable = (typeof elementsTable === 'undefined')?[]:elementsTable;
        this.car = Object.create(car);
        this.car.open = function (){
            console.log("Abrir coche");
            self.addRow();
        }

        this.car.delete = function (){
            console.log(`Delete coche: ${self.car.id}`);
            self.deleteRow(this);
        }
        
        //this.car.elementsTable = ['gg'];
        //this.car.numElements = 10;
        //this.car.open = this.addRow;

        this.person = new Person("Ronald");
        this.person.open = function (){
            console.log("Abrir coche Persona");
        }
        //$("#" + this.idAdd).click(function () {
        //    self.addRow();
        //});
    },

    addRow: function () {
        if (this.elementsTable.length === 0) return;
        this.numElements++;
    },

    deleteRow: function (e) {
        console.log(e);
    }
};

var _instanciaOne = Object.create(dataTable);
_instanciaOne.init(['one', 'two', 'three']);
_instanciaOne.car.id = "car0ne";

console.log(_instanciaOne.numElements);
_instanciaOne.car.open();
_instanciaOne.car.open();
_instanciaOne.car.open();
_instanciaOne.car.open();
console.log(_instanciaOne.numElements);
_instanciaOne.car.delete();

console.log();

var _instanciaTwo = Object.create(dataTable);
_instanciaTwo.init(['one']);
_instanciaTwo.car.id = "carTwo";

console.log(_instanciaTwo.numElements);
_instanciaTwo.car.open();
console.log(_instanciaTwo.numElements);
_instanciaTwo.car.delete();