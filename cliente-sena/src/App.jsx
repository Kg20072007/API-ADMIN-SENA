import { useState, useEffect } from 'react';
import axios from 'axios';

function App() {
  const [courses, setCourses] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  // Ruta de tu API local en Laravel
  const API_URL = 'http://127.0.0.1:8000/api/courses'; 

  useEffect(() => {
    axios.get(API_URL)
      .then((response) => {
        setCourses(response.data);
        setLoading(false);
      })
      .catch((err) => {
        console.error(err);
        setError("No se pudo conectar con la API de Laravel.");
        setLoading(false);
      });
  }, []);

  if (loading) return <div style={styles.center}>🔄 Cargando datos...</div>;
  if (error) return <div style={{...styles.center, color: 'red'}}>{error}</div>;

  return (
    <div style={styles.container}>
      <header style={styles.header}>
        <h1>📚 Cliente de Gestión - ADSO</h1>
        <p>Consumiendo la API de admin_sena</p>
      </header>

      <main style={styles.main}>
        <h2>Fichas y Cursos Registrados</h2>
        <div style={styles.grid}>
          {courses.map((course) => (
            <div key={course.id} style={styles.card}>
              <h3>Ficha N° {course.course_number}</h3>
              <p><strong>Jornada:</strong> {course.day}</p>
              <span style={styles.badge}>Conectado</span>
            </div>
          ))}
        </div>
      </main>
    </div>
  );
}

const styles = {
  container: { fontFamily: 'Arial, sans-serif', backgroundColor: '#f4f6f9', minHeight: '100vh', padding: '20px' },
  header: { textAlign: 'center', backgroundColor: '#39a900', color: 'white', padding: '15px', borderRadius: '8px', marginBottom: '30px' },
  main: { maxWidth: '1000px', margin: '0 auto' },
  grid: { display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(280px, 1fr))', gap: '20px' },
  card: { backgroundColor: 'white', padding: '20px', borderRadius: '8px', boxShadow: '0 4px 6px rgba(0,0,0,0.1)', borderLeft: '5px solid #39a900' },
  badge: { display: 'inline-block', backgroundColor: '#e1f5fe', color: '#0288d1', padding: '5px 10px', borderRadius: '15px', fontSize: '12px', marginTop: '10px', fontWeight: 'bold' },
  center: { display: 'flex', justifyContent: 'center', alignItems: 'center', height: '100vh', fontSize: '18px' }
};

export default App;