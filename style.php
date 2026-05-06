:root {
    --gold: #D4AF37;
    --dark: #1a1a1a;
    --luxury-grad: linear-gradient(135deg, #D4AF37 0%, #F1D592 50%, #D4AF37 100%);
}

body {
    background-color: #121212;
    color: #e0e0e0;
    font-family: 'Playfair Display', serif; /* Font elegan */
}

.card {
    background: #1e1e1e;
    border: 1px solid #333;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.btn-luxury {
    background: var(--luxury-grad);
    color: #000;
    font-weight: bold;
    border: none;
    transition: 0.3s;
}

.btn-luxury:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
    color: #000;
}

.gold-text {
    color: var(--gold);
}

.table {
    color: #e0e0e0;
    border-color: #333;
}

.table thead {
    background: var(--luxury-grad);
    color: #000;
}

input.form-control {
    background: #2a2a2a;
    border: 1px solid #444;
    color: white;
}

input.form-control:focus {
    background: #333;
    border-color: var(--gold);
    box-shadow: 0 0 5px var(--gold);
    color: white;
}