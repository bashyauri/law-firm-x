export default class ClientController {
    static async index() {
        const response = await fetch("/api/clients");
        const clients = await response.json();
        return clients;
    }
}
