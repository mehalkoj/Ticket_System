




class Ticket {
    constructor(title, subject, userid, user) {
        this.title = title;
        this.subject = subject;
        this.userid = userid;
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
                    list.push(/*Variables*/);
                    break;
                case 'priority':
                    // Priority List Grabbed From PHP
                    list.push(/*Variables*/);
                    break;
                case 'issue':
                    // Issue List Grabbed From PHP
                    list.push(/*Variables*/);
                    break;
                case 'tech':
                    // Tech List Grabbed From PHP
                    list.push(/*Variables*/);
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
        let container = document.createElement('div');
        container.id = "ticket-container";
        container.appendChild(this.component('h2', 'ticket-title', this.title));
        //this.component('img', 'profile-pic', this.profilePic);
        container.appendChild(this.component('h3', 'user', this.user));
        container.appendChild(this.component('p', 'subject', this.subject));
        container.appendChild(this.component('div', 'ticket-modal'));
        container.appendChild(this.component('div', 'categories'));
        container.appendChild(this.component('select', 'department'));
        container.appendChild(this.component('select', 'location'));
        container.appendChild(this.component('select', 'priority'));
        container.appendChild(this.component('select', 'issue'));
        container.appendChild(this.component('select', 'tech'));

        return container;

    };

}



function createTicket() {
    
    let user = document.getElementById('user').value;
    let subject = document.getElementById('subject').value;
    let title = document.getElementById('title').value;
    let userid = Math.random(); // Change
    const ticket = new Ticket(title, subject, userid, user);
    document.getElementById('dashboard').appendChild(ticket.create()
    
    );};