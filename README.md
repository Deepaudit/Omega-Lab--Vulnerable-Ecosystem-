# 🛡️ OMEGA LAB - Deep Audit Research

![Cybersecurity](https://img.shields.io/badge/Focus-Offensive_Security-red?style=for-the-badge&logo=kali-linux)
![PHP](https://img.shields.io/badge/Language-PHP_8.x-777BB4?style=for-the-badge&logo=php)
![OWASP](https://img.shields.io/badge/Compliance-OWASP_Top_10-blue?style=for-the-badge)

> **"In the darkness of the code, we find the light of the truth."** > Laboratório avançado de vulnerabilidades web desenvolvido para o ecossistema **Deep Audit**.

---

## 📝 Descrição do Projeto

O **Omega Lab** é um ambiente deliberadamente vulnerável (Vulnerable-by-Design) construído em PHP para treinamento de **Penetration Testing**. Ele simula um ecossistema empresarial complexo, integrando desde falhas clássicas de banco de dados até vulnerabilidades modernas de lógica e protocolos de comunicação.

Este projeto não é apenas um script, é um campo de batalha para quem deseja dominar o **OWASP Top 10** na prática.

---

## ⚡ Vulnerabilidades Implementadas (Checklist)

O laboratório contém **18 vetores de ataque** distintos para exploração manual:

| ID | Vulnerabilidade | Ícone | Nível de Risco |
|:---|:---|:---:|:---:|
| 01 | **SQL Injection** | 🗄️ | CRITICAL |
| 02 | **HTML Injection** | 🖼️ | MEDIUM |
| 03 | **LDAP Injection** | 📒 | HIGH |
| 04 | **XPATH Injection** | 📂 | HIGH |
| 05 | **SOAP Injection** | ✉️ | MEDIUM |
| 06 | **XSS (Cross-Site Scripting)** | 💉 | HIGH |
| 07 | **Broken Access Control (IDOR)** | 🔑 | HIGH |
| 08 | **RCE (Remote Code Execution)** | 💻 | CRITICAL |
| 09 | **LFI (Local File Inclusion)** | 📑 | CRITICAL |
| 10 | **Command Injection** | 🐚 | CRITICAL |
| 11 | **Information Exposure** | 🔓 | LOW |
| 12 | **Account Takeover (ATO)** | 👤 | CRITICAL |
| 13 | **Session Hijacking** | 🍪 | HIGH |
| 14 | **Race Condition** | 🏁 | MEDIUM |
| 15 | **Client-Side Randomness** | 🎲 | MEDIUM |
| 16 | **Broken Cryptography** | 🔐 | HIGH |
| 17 | **Security through Obscurity** | 🙈 | LOW |
| 18 | **Parameter Tampering** | 🛠️ | MEDIUM |

---

## 🚀 Como Configurar o Laboratório

### Pré-requisitos
* PHP 8.x instalado
* Servidor MySQL/MariaDB (XAMPP recomendado)
* Nmap instalado no sistema

### Instalação
1. Clone o repositório:
   ```bash
   git clone https://github.com/Deepaudit/omega-lab-deep-audit.git
Mova o arquivo para o seu diretório web (/var/www/html ou htdocs).

Importe o banco de dados inicial (opcional):

Bash
mysql -u root -p < database_setup.sql
Acesse via browser: http://localhost/omega_lab.php

🛠️ Metodologia de Uso
Este laboratório foi desenhado para ser explorado de forma manual ou automatizada. Recomenda-se o uso das seguintes ferramentas:

Burp Suite (Intercepção de Requests)

Nmap (Reconhecimento de serviços)

Sqlmap (Testes de SQLi)

Ffuf / Dirb (Fuzzing de diretórios)

⚠️ AVISO LEGAL (Disclaimer)
ESTE SOFTWARE É APENAS PARA FINS EDUCACIONAIS. O autor não se responsabiliza pelo uso indevido destas ferramentas ou conhecimentos. Nunca utilize estas técnicas em sistemas sem autorização expressa por escrito dos proprietários. Invadir sistemas é crime.

👨‍💻 Autor
Pablo Cyber
Lead Security Researcher @ Deep Audit Research
