export default class Gate {
    constructor(user) {
        this.user = user;
    }

    isAdmin() {
        return this.user.type === "admin";
    }

    isTrainer() {
        return this.user.type === "trainer";
    }

    isStaff() {
        return this.user.type === "staff";
    }

    isNutritionist() {
        return this.user.type === "nutritionist";
    }

    isMember() {
        return this.user.type === "user";
    }

    canAccessAllMember() {
        if (this.user.type === "admin" || this.user.type === "staff") {
            return true;
        }
    }
}
