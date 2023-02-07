function getUserData() {

}



class Ticket {
    constructor(title, subject, user) {
        this.title = title;
        this.subject = subject;
        this.user = user;
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
        container.appendChild(this.component('h2', 'ticket-title', this.title));
        //this.component('img', 'profile-pic', this.profilePic);

        container.appendChild(this.component('h3', 'name', this.user));
        let modal = container.appendChild(this.component('div', 'ticket-modal', ''));
        modal.appendChild(this.component('p', 'subject', this.subject));
        let categories =  container.appendChild(this.component('div', 'categories', ''));
        categories.appendChild(this.component('select', 'department'));
        categories.appendChild(this.component('select', 'location'));
        categories.appendChild(this.component('select', 'priority'));
        categories.appendChild(this.component('select', 'issue'));
        categories.appendChild(this.component('select', 'tech'));


        return container;

    };

}


function createTicket() {
    
    //let user = document.getElementById('user').value;
    let subject = document.getElementById('desc').value;
    let title = document.getElementById('title').value;
    let user = document.getElementById('user').value;

    const ticket = new Ticket(title, subject, user);
    document.getElementById('dashboard').appendChild(ticket.create());

};