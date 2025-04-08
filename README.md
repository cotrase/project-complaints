
# 📝 SIRVEN - Sistema de Registro de Quejas

Aplicación web desarrollada en PHP con arquitectura MVC que permite registrar, listar y gestionar quejas por ciudad y departamento.

## 🚀 Características

- Registro de **departamentos**, **ciudades** y **quejas**.
- Asociación entre **ciudades y departamentos**.
- Registro de quejas con selección dinámica de ciudad según el departamento.
- Sistema de **estados** para las quejas (Pendiente, En Proceso, Resuelta).
- Interfaz moderna usando **Bootstrap 5**.
- Notificaciones visuales con **SweetAlert2**.
- Validaciones de datos y consultas SQL seguras con `mysqli`.

---

## 📁 Estructura del Proyecto

```
project-root/
│
├── config/
│   └── config.php          # Conexión a la base de datos
│
├── controllers/
│   ├── DepaControl.php
│   ├── CityControl.php
│   └── QuejaControl.php
│
├── models/
│   ├── Departamento.php
│   ├── Ciudad.php
│   └── Queja.php
│
├── views/
│   ├── form_depa.php
│   ├── form_ciudad.php
│   ├── form_quejas.php
│   ├── lista_quejas.php
│   └── lista_estados.php
│
├── public/
│   ├── style.css
│   ├── favicon-32x32.png
│   ├── favicon-16x16.png
│   └── sweetalert2.min.js
│
├── index.php
└── README.md
```

---

## 🛠️ Requisitos

- PHP >= 7.4
- MySQL / MariaDB
- Servidor local (XAMPP, WAMP o similar)

---

## ⚙️ Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/tuusuario/sirven.git
```

2. Importa la base de datos `sirven_db.sql` en MySQL.

3. Configura tu conexión en `config/config.php`:

```php
$conexion = new mysqli("localhost", "root", "", "sirven_db");
```

4. Asegúrate de que `public/` contenga tus íconos y `style.css`.

5. Inicia el servidor:

```
http://localhost/sirven/project-root/index.php
```

---

## ✅ Estados de Queja

Las quejas pueden tener uno de los siguientes estados:

- 🟡 **Pendiente**
- 🟠 **En Proceso**
- 🟢 **Resuelta**

---

## ✨ Mejoras a Futuro

- Autenticación de usuarios
- Panel de administración
- Filtros y búsqueda por estado
- Exportar a PDF/Excel

---

## 📸 Captura

![Vista principal](screenshots/vista_quejas.png)

---

## 📄 Licencia

Este proyecto es de uso académico y personal. Puedes adaptarlo y reutilizarlo según tus necesidades.

---

## 🧑‍💻 Autor

**Edward Romero** - _Ingeniero de Sistemas_
