WITH CTE AS (
    SELECT 
        *,
        ROW_NUMBER() OVER (PARTITION BY id_usuario ORDER BY ano DESC, mes DESC, dia DESC) AS row_num
    FROM 
        registrousuario
    WHERE 
        id_usuario = 1
)
SELECT
    t1.id AS id_ultima,
    t1.id_usuario,
    t2.id AS id_penultima,
    CONCAT_WS(', ',
        CASE WHEN t1.login != t2.login THEN 'login' ELSE NULL END,
        CASE WHEN t1.nome != t2.nome THEN 'nome' ELSE NULL END,
        CASE WHEN t1.cpf != t2.cpf THEN 'cpf' ELSE NULL END,
        CASE WHEN t1.nascimento != t2.nascimento THEN 'nascimento' ELSE NULL END,
        CASE WHEN t1.genero != t2.genero THEN 'genero' ELSE NULL END,
        CASE WHEN t1.email != t2.email THEN 'email' ELSE NULL END,
        CASE WHEN t1.telefone != t2.telefone THEN 'telefone' ELSE NULL END,
        CASE WHEN t1.departamento != t2.departamento THEN 'departamento' ELSE NULL END,
        CASE WHEN t1.cargo != t2.cargo THEN 'cargo' ELSE NULL END,
        CASE WHEN t1.nivel != t2.nivel THEN 'nivel' ELSE NULL END,
        CASE WHEN t1.ativo != t2.ativo THEN 'ativo' ELSE NULL END
    ) AS diferencas,
    CASE WHEN t1.login != t2.login THEN t1.login ELSE NULL END AS login_ultima,
    CASE WHEN t1.login != t2.login THEN t2.login ELSE NULL END AS login_penultima,
    CASE WHEN t1.nome != t2.nome THEN t1.nome ELSE NULL END AS nome_ultima,
    CASE WHEN t1.nome != t2.nome THEN t2.nome ELSE NULL END AS nome_penultima,
    CASE WHEN t1.cpf != t2.cpf THEN t1.cpf ELSE NULL END AS cpf_ultima,
    CASE WHEN t1.cpf != t2.cpf THEN t2.cpf ELSE NULL END AS cpf_penultima,
    CASE WHEN t1.nascimento != t2.nascimento THEN t1.nascimento ELSE NULL END AS nascimento_ultima,
    CASE WHEN t1.nascimento != t2.nascimento THEN t2.nascimento ELSE NULL END AS nascimento_penultima,
    CASE WHEN t1.genero != t2.genero THEN t1.genero ELSE NULL END AS genero_ultima,
    CASE WHEN t1.genero != t2.genero THEN t2.genero ELSE NULL END AS genero_penultima,
    CASE WHEN t1.email != t2.email THEN t1.email ELSE NULL END AS email_ultima,
    CASE WHEN t1.email != t2.email THEN t2.email ELSE NULL END AS email_penultima,
    CASE WHEN t1.telefone != t2.telefone THEN t1.telefone ELSE NULL END AS telefone_ultima,
    CASE WHEN t1.telefone != t2.telefone THEN t2.telefone ELSE NULL END AS telefone_penultima,
    CASE WHEN t1.departamento != t2.departamento THEN t1.departamento ELSE NULL END AS departamento_ultima,
    CASE WHEN t1.departamento != t2.departamento THEN t2.departamento ELSE NULL END AS departamento_penultima,
    CASE WHEN t1.cargo != t2.cargo THEN t1.cargo ELSE NULL END AS cargo_ultima,
    CASE WHEN t1.cargo != t2.cargo THEN t2.cargo ELSE NULL END AS cargo_penultima,
    CASE WHEN t1.nivel != t2.nivel THEN t1.nivel ELSE NULL END AS nivel_ultima,
    CASE WHEN t1.nivel != t2.nivel THEN t2.nivel ELSE NULL END AS nivel_penultima,
    CASE WHEN t1.ativo != t2.ativo THEN t1.ativo ELSE NULL END AS ativo_ultima,
    CASE WHEN t1.ativo != t2.ativo THEN t2.ativo ELSE NULL END AS ativo_penultima
FROM 
    CTE t1
JOIN 
    CTE t2 ON t1.id = $id AND t2.row_num = 2
WHERE 
    t1.id_usuario = 1 AND t2.id_usuario = 1
ORDER BY 
    t1.ano DESC, t1.mes DESC, t1.dia DESC; 