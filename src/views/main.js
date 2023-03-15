// Grabs JSON Data from PHP which comes from Database



class Ticket {
    constructor(header, subject, employee) {
        this.header = header;
        this.subject = subject;
        this.user = employee;
    }

    component(type, id, innerHTML) {
        
        let element = document.createElement(type)
        element.id = id;

        // Checks if element is a drop down menu, then pulls the right data for the right ID
        if (type === "select"){
            let list = [];
            switch (id) {
                case 'department':
                    // Department List Grabbed From PHP
                    list.push("Accounting");
                    break;
                case 'location':
                    // Location List Grabbed From PHP
                    list.push("Texas");
                    break;
                case 'priority':
                    // Priority List Grabbed From PHP
                    list.push("low");
                    break;
                case 'issue':
                    // Issue List Grabbed From PHP
                    list.push("Problem");
                    break;
                case 'tech':
                    // Tech List Grabbed From PHP
                    list.push("Test Tech");
                    list.push("Test Tech2");
                    list.push("Test Tech3");
                    list.push("Test Tech15325435634");
                    break;
            };
            // iterates over list and makes them into options
            for (let i = 0; i < list.length; i++){
                let option = document.createElement("option");
                option.value = list[i];
                option.innerHTML = list[i];
                element.appendChild(option);
            };
            return element;
        } else {
            element.innerHTML = innerHTML;
            return element;
        };
    };

    

    create(){
        // Creates the divs and elements that build the ticket design
        let container = document.createElement('div');
        container.id = "ticket-container";
        //let checkboxCnt = document.createElement('div');
        let checkbox = document.createElement('input');
        checkbox.type = "checkbox";
        checkbox.id = this.header + ' - toggle';
        checkbox.className = 'ticket-toggle';
        container.appendChild(checkbox);

        let modallink = document.createElement('a');
        modallink.classList.add('modal-entry');
        let ticketTitle = container.appendChild(this.component('h2', 'ticket-title', this.header));
        
        
        //this.component('img', 'profile-pic', this.profilePic);

        container.appendChild(this.component('h3', 'name', this.user));
        //add users email below their name
        let modal = container.appendChild(this.component('div', 'ticket-modal', ''));
        modal.appendChild(this.component('p', 'subject', this.subject));
        

        return container;

    };

    // Creates The Box Of Values You Can Update When You Click A Checkbox
    toggle(){

        let updateBox = this.component('div', this.header + 'updateBox', '');

        let categories = updateBox.appendChild(this.component('div', 'categories', ''));
        categories.appendChild(this.component('select', 'department'));
        categories.appendChild(this.component('select', 'location'));
        categories.appendChild(this.component('select', 'priority'));
        categories.appendChild(this.component('select', 'issue'));
        categories.appendChild(this.component('select', 'tech'));


        return updateBox;

    }


}

function createTicket() {
    fetch('../ticket_creation.php')
    .then(response => response.json())
    .then(data => {
        let tickets = data.map(ticket => new Ticket(ticket.header, ticket.subject, ticket.employee));
        let dashboard = document.getElementById('dashboard');
        tickets.forEach(ticket => dashboard.appendChild(ticket.create()));
        tickets.forEach(ticket => dashboard.appendChild(ticket.toggle()));

    })
    .catch(error => console.error("Failed To Created Objects"))
}

window.addEventListener("load", (event) => {
    console.log("Window Load");
    createTicket();
});
