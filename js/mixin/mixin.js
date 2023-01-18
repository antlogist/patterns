class Truck {
    delivery() {
        console.log('Truck delivery');
    }
}

class Pickup {
    delivery() {
        console.log('Pickup delivery');
    }
}

const mixin = {
    handlingOperations() {
        console.log('Loading and unloading operations');
    }
}

Object.assign(Truck.prototype, mixin);
Object.assign(Pickup.prototype, mixin);

const truck = new Truck();
truck.delivery();
truck.handlingOperations();

const pickup = new Pickup();
pickup.delivery();
pickup.handlingOperations();
