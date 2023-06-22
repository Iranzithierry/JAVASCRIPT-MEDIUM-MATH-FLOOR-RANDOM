function car(type,fuel)
{
this.type=type;
this.fuel =fuel;
}
function setbrand(brand)
{
    car.call(this,"convertible","petrol")
    this.brand=brand;
    console.log('car details=',this);
    
}
const newBrand = new setbrand("MATABARO");