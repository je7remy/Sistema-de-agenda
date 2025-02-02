# 📅 Sistema de Agenda Web | PHP, MySQL, Bootstrap & PDO  

Un **sistema de agenda personal** desarrollado en **PHP con MySQL**, utilizando **PDO para la conexión segura a la base de datos**. Implementa **Bootstrap para un diseño moderno** y **DataTables para una búsqueda eficiente** de contactos.  

---

## 🚀 Características Principales  
✔ **Gestión de contactos** (Nombre, Teléfono, Correo, Dirección) 📇  
✔ **CRUD completo** (Agregar, Editar, Eliminar, Listar contactos) ✏️  
✔ **Conexión segura con MySQL usando PDO** 🔐  
✔ **Búsqueda avanzada y paginación con DataTables** 🔍  
✔ **Interfaz moderna y responsiva con Bootstrap** 🎨  

---

## 🛠️ Tecnologías Utilizadas  
🔹 **PHP (PDO)** - Manejo seguro de la base de datos  
🔹 **MySQL** - Almacenamiento de contactos  
🔹 **Bootstrap** - Diseño adaptable y atractivo  
🔹 **DataTables** - Filtros, paginación y ordenamiento  
🔹 **JavaScript & jQuery** - Interactividad y validaciones  

---

## 📂 Estructura del Proyecto  
```
📂 sistema-agenda/
│── 📂 bootstrap/          # Archivos CSS y JS de Bootstrap  
│── 📂 DataTables/         # Scripts y estilos para DataTables  
│── 📂 includes/           # Archivos modulares del sistema  
│── 📜 index.php           # Página principal con lista de contactos  
│── 📜 conexion.php        # Configuración de la base de datos con PDO  
│── 📜 agregar.php         # Lógica para agregar contactos  
│── 📜 editar.php          # Lógica para editar contactos  
│── 📜 delete.php          # Lógica para eliminar contactos  
│── 📜 agenda.sql          # Estructura de la base de datos  
```

---
## 📸 Capturas de Pantalla

### Pantalla de Inicio
![Pasted image 20250202172945](https://github.com/user-attachments/assets/10c9fbf6-7474-484c-abfd-8f04a68c0eee)

---

## 📥 Instalación y Uso  
1️⃣ **Clonar el repositorio:**  
```bash
git clone https://github.com/tu-usuario/sistema-agenda.git
```
2️⃣ **Configurar la base de datos:**  
- Importa el archivo `agenda.sql` en **MySQL**.  
- Edita `conexion.php` con tus credenciales de base de datos.  

3️⃣ **Ejecutar en un servidor local (XAMPP, WAMP, etc.)**  
4️⃣ **Abrir en el navegador:**  
```
http://localhost/sistema-agenda/index.php
```

---

## 🔍 Código Destacado: Conexión a MySQL con PDO  
```php
<?php
class ConectarDB {
    private $host = "localhost";
    private $dbname = "agenda";
    private $username = "root";
    private $password = "";
    public $conn;

    public function open() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }
}
?>
```

---

## 🏗️ Futuras Mejoras  
✔ **Autenticación de usuarios** con roles y permisos 🔐  
✔ **Integración con API de WhatsApp** para enviar mensajes 📲  
✔ **Exportación de contactos en CSV y PDF** 📄  

---

## 📜 Licencia  
Este proyecto está bajo la licencia **MIT**, puedes modificarlo y adaptarlo libremente.  

📌 **¡Administra tus contactos fácilmente con esta agenda web en PHP y MySQL!** 🚀  
