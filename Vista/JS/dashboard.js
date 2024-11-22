// Inicialización del gráfico usando Chart.js
document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById("statsChart").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
            datasets: [
                {
                    label: "Ingresos ($)",
                    data: [500, 700, 800, 600, 900],
                    backgroundColor: ["#4CAF50", "#66BB6A", "#81C784", "#A5D6A7", "#C8E6C9"],
                    borderColor: "#388E3C",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
