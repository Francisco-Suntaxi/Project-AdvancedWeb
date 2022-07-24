import User from '../userSchema/userSchema.js';
import Medicine from '../userSchema/medicineSchema.js';


export const addMedicine = async (request, response) => {
    const medicine = request.body;
    const newMedicine = new Medicine(medicine);

    try {
        await newMedicine.save();
        response.status(201).json(newMedicine);
    } catch (error) {
        response.status(409).json({ message: error.message });
    }

};

export const addMedicineLot = async (request, response) => {
    const medicine = request.body;
    medicine.description = medicine.description + " Lote Nuevo";
    const newMedicine = new Medicine(medicine);

    try {
        await newMedicine.save();
        response.status(201).json(newMedicine);
    } catch (error) {
        response.status(409).json({ message: error.message });
    }

};
export const addMedicineIncomplete = async (request, response) => {
    const medicine = request.body;
    const medicines = await Medicine.find({});
    var idAux = 0;

    for (let i = 0; i < medicines.length - 1; i++) {
        const i1 = i + 1;
        if (medicines[i].id >= medicines[i1].id) {
            idAux = medicines[i].id;
        }

    }

    if (medicine.id === '') {
        medicine.id = idAux + 1;
    }
    if (medicine.name == '') {
        medicine.name = "Nombre Vacio";
    }
    if (medicine.description === "") {
        medicine.description = "Descripción vacia";
    }
    if (medicine.category === "") {
        medicine.category = "Categoria vacia";
    }
    if (medicine.quantity === '') {
        medicine.quantity = 0;
    }
    if (medicine.price === "") {
        medicine.price = "Precio vacio";
    }
    if (medicine.elabDate === "") {
        medicine.elabDate = "Fecha de elaboracion vacia";
    }
    if (medicine.expDate === "") {
        medicine.expDate = "Fecha de expiracion vacia";
    }

    const newMedicine = new Medicine(medicine);

    try {
        await newMedicine.save();
        response.status(201).json(newMedicine);
    } catch (error) {
        response.status(409).json({ message: error.message });
    }

};

export const getAllMedicines = async (request, response) => {
    try {

        const medicines = await Medicine.find({});
        response.status(200).json(medicines);
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};

export const getMedicine = async (request, response) => {
    try {

        const medicine = await Medicine.findOne({ id: request.params.id });
        response.status(200).json(medicine);
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};

export const getMedicineName = async (request, response) => {
    try {

        const medicine = await Medicine.findOne({ name: request.params.name });
        response.status(200).json(medicine);
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};
export const getMedicineCategory = async (request, response) => {
    try {

        const medicine = await Medicine.findOne({ category: request.params.category });
        response.status(200).json(medicine);
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};

export const editMedicineId = async (request, response) => {
    const medicine = await Medicine.findOne({ id: request.params.id });
    if (request.body.name) {
        medicine.name = request.body.name;
    }
    if (request.body.description) {
        medicine.description = request.body.description;
    }
    if (request.body.category) {
        medicine.category = request.body.category;
    }
    if (request.body.quantity) {
        medicine.quantity = request.body.quantity;
    }
    if (request.body.price) {
        medicine.price = request.body.price;
    }
    if (request.body.elabDate) {
        medicine.elabDate = request.body.elabDate;
    }
    if (request.body.expDate) {
        medicine.expDate = request.body.expDate;
    }
    try {
        await medicine.save();
        response.status(200).json({ message: ' medicine successfully updated' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }
};
export const editMedicineName = async (request, response) => {
    const medicine = await Medicine.findOne({ name: request.params.name });
    const medicines = await Medicine.find({});
    var idAux = 0;
    var idAux1 = 0;

    for (let i = 0; i < medicines.length - 1; i++) {
        const i1 = i + 1;
        if (medicines[i].id >= medicines[i1].id) {
            idAux1 = medicines[i].id;
        }

    }

    for (let i = 0; i < medicines.length - 1; i++) {

        if (medicines[i].id == request.body.id && medicines[i].name != request.params.name) {
            idAux = idAux + 1;
        }
        if (idAux >= 1) {
            medicine.id = idAux1 + 1;
        }
        if (idAux == 0) {
            medicine.id = request.body.id;
        }


    }
    if (request.body.description) {
        medicine.description = request.body.description;
    }
    if (request.body.category) {
        medicine.category = request.body.category;
    }
    if (request.body.quantity) {
        medicine.quantity = request.body.quantity;
    }
    if (request.body.price) {
        medicine.price = request.body.price;
    }
    if (request.body.elabDate) {
        medicine.elabDate = request.body.elabDate;
    }
    if (request.body.expDate) {
        medicine.expDate = request.body.expDate;
    }
    try {
        await medicine.save();
        response.status(200).json({ message: ' medicine successfully updated' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }
};
export const editMedicineCategory = async (request, response) => {
    const medicine = await Medicine.findOne({ category: request.params.category });
    if (request.body.name) {
        medicine.name = request.body.name;
    }
    if (request.body.description) {
        medicine.description = request.body.description;
    }
    if (request.body.id) {
        medicine.id = request.body.id;
    }
    if (request.body.quantity) {
        medicine.quantity = request.body.quantity;
    }
    if (request.body.price) {
        medicine.price = request.body.price;
    }
    if (request.body.elabDate) {
        medicine.elabDate = request.body.elabDate;
    }
    if (request.body.expDate) {
        medicine.expDate = request.body.expDate;
    }
    try {
        await medicine.save();
        response.status(200).json({ message: ' medicine successfully updated' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }
};

export const editMedicineQuantity = async (request, response) => {
    const medicine = await Medicine.findOne({ quantity: request.params.quantity });
    if (request.body.name) {
        medicine.name = request.body.name;
    }
    if (request.body.description) {
        medicine.description = request.body.description;
    }
    if (request.body.category) {
        medicine.category = request.body.category;
    }
    if (request.body.id) {
        medicine.id = request.body.id;
    }
    if (request.body.price) {
        medicine.price = request.body.price;
    }
    if (request.body.elabDate) {
        medicine.elabDate = request.body.elabDate;
    }
    if (request.body.expDate) {
        medicine.expDate = request.body.expDate;
    }
    try {
        await medicine.save();
        response.status(200).json({ message: ' medicine successfully updated' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }
};

export const deleteMedicine = async (request, response) => {
    try {
        await Medicine.deleteOne({ id: request.params.id });
        response.status(200).json({ message: 'Deleted successfully' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};
export const deleteMedicineActualDate = async (request, response) => {
    const reqDate = request.params.actualDate;
    let oldDate = reqDate.split('-');
    let oldDay = Number(oldDate[0]);
    let oldMonth = Number(oldDate[1]);
    let oldYear = Number(oldDate[2]);
    console.log(oldDay + ' ' + oldMonth + ' ' + oldYear);

    //const dateMedicines = await Medicine.find({id: oldDay[0]})
    // console.log(dateMedicines)

    let date = new Date();
    let day = Number(date.getDate());
    let month = Number(date.getMonth() + 1);
    let year = Number(date.getFullYear());
    console.log(day + ' ' + month + ' ' + year);

    if (oldYear <= year && oldMonth <= month) {
        if (oldDay > day){
            response.status(200).json({ message: 'The medicine will expire in the following days' });
        }
        if (oldDay <= day) {
            try {
                await Medicine.deleteMany({ expDate: request.params.actualDate });
                response.status(200).json({ message: 'Expired medicine. Deleted successfully' });
            } catch (error) {
                response.status(404).json({ message: error.message });
            }
        }

    } else {
        response.status(200).json({ message: 'The medicine will expire in the following years' });
    }



};

export const deleteMedicineQuantity = async (request, response) => {

    try {
        await Medicine.deleteOne({ quantity: request.params.quantity });
        response.status(200).json({ message: 'Deleted successfully' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};

export const deleteMedicineCategory = async (request, response) => {

    try {
        await Medicine.deleteOne({ category: request.params.category });
        response.status(200).json({ message: 'Deleted successfully' });
    } catch (error) {
        response.status(404).json({ message: error.message });
    }

};

