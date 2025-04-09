# 📝 Sistema de Registro de Quejas

Aplicación web desarrollada en PHP con arquitectura MVC que permite registrar, listar y gestionar quejas por ciudad y departamento.
Cada Departamento puede tener varias ciudades asociadas.

## 🚀 Características

- Registro de **departamentos**, **ciudades** y **quejas**.
- Asociación entre **ciudades y departamentos**.
- Registro de quejas con selección dinámica de ciudad según el departamento.
- Sistema de **estados** para las quejas (Pendiente, En Proceso, Resuelta).
- Interfaz moderna usando **Bootstrap 5**.
- Notificaciones visuales con **SweetAlert2**.
- Validaciones de datos y consultas SQL seguras con `mysqli`.

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

2. Crea la base de datos

3. Configura tu conexión en `config/config.php`:

```php
$conexion = new mysqlihost = "";
$user = ""; 
$password = ""; 
$dbname = "";);
```

4. Asegúrate de que `public/` contenga tus íconos y `style.css`.

5. Inicia el servidor:

```
http://localhost/project-root/index.php
```

---

## ✨ Mejoras a Futuro

- Autenticación de usuarios
- Panel de administración
- Filtros y búsqueda por estado
- Exportar a PDF/Excel

---

## 📄 Licencia

Este proyecto es de uso académico y personal. Puedes adaptarlo y reutilizarlo según tus necesidades.

---

## 🧑‍💻 Autor

**Edward Romero** - _Ingeniero de Sistemas_


## Proyecto hasta el momento: 
![image](https://github.com/user-attachments/assets/270c81f4-d24d-4111-bbfc-c2b570c4fb73)
![image](https://github.com/user-attachments/assets/8c49d875-7afa-43d5-8441-0e6b6d248dad)

![image](https://github.com/user-attachments/assets/0634828d-4c88-4a37-95ba-99864ec17638)





