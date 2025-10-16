document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registerForm");
    const msg = document.getElementById("registerMessage");

    if (!form) return;

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const data = new FormData(form);
        msg.innerHTML = "";

        try {
            const res = await fetch("/api/auth/register.php", { method: "POST", body: data });

        const json = await res.json();

        if(json.status === "ok") {
            msg.innerHTML = `<div class="alert alert-success">${json.message}</div>`;
            setTimeout(() => window.location.reload(), 1500);
        } else {
            msg.innerHTML = `<div class="alert alert-danger">${json.message}</div>`;
        }
        } catch (err) {
            msg.innerHTML = `<div class="alert alert-danger">Erreur serveur.</div>`;
        }
    });
});