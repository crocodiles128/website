// auth.js

export function checkAuth() {
  const token = localStorage.getItem('authToken');
  if (!token) {
      window.location.href = '/website/login.html'; // Redireciona para a página de login se não estiver autenticado
  }
}

export async function checkUserStatus(userId) {
  const BASE_ID = 'appIukB1DOEExRJhh'; // Substitua pelo seu Base ID
  const PERSONAL_ACCESS_TOKEN = 'patYxG90sLDfDts13.ea21e3027c75be284b20da2b62e49651d857a0385d30c45b8ff1f964a211a50a'; // Substitua pelo seu token
  const TABLE_NAME = 'Membros'; // Nome da tabela

  try {
      const response = await fetch(`https://api.airtable.com/v0/${BASE_ID}/${TABLE_NAME}/${userId}`, {
          method: 'GET',
          headers: {
              'Authorization': `Bearer ${PERSONAL_ACCESS_TOKEN}`,
              'Content-Type': 'application/json'
          }
      });

      if (!response.ok) {
          throw new Error('Erro ao buscar o status do usuário');
      }

      const data = await response.json();
      return data.fields.Status; // Retorna o status do usuário
  } catch (error) {
      console.error('Error:', error);
      return null; // Retorna null em caso de erro
  }
}

export async function initAuth() {
  document.addEventListener('DOMContentLoaded', async () => {
      checkAuth(); // Verifica a autenticação ao carregar a página

      const userId = localStorage.getItem('authToken');
      if (userId) {
          const status = await checkUserStatus(userId);
          if (status === 0) {
              window.location.href = '/website/verificar-email.html'; // Redireciona se o status for 0
          }
      }

      const logoutButton = document.getElementById('logoutButton');
      if (logoutButton) {
          logoutButton.addEventListener('click', logout);
      }
  });
}

export function logout() {
  localStorage.removeItem('authToken'); // Remove o token de autenticação
  window.location.href = '/website/login.html'; // Redireciona para a página de login
}
