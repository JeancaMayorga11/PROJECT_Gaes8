package com.app.web;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import com.app.web.entidad.Estudiante;
import com.app.web.repositorio.EstudianteRepositorio;

@SpringBootApplication
public class CrudSpringBootApplication implements CommandLineRunner {
	
	public static void main(String[] args) {
		SpringApplication.run(CrudSpringBootApplication.class, args);
	}
	 
	
		
		@Autowired
		private EstudianteRepositorio repositorio;
	
		@Override
		public void run(String... args) throws Exception {
		
		
		Estudiante elemento1 = new Estudiante("Destornillador", "1", "10000");
		repositorio.save(elemento1);
		
		Estudiante elemento2 = new Estudiante("Liquido", "1", "90000");
		repositorio.save(elemento2);
	
		
	}

}
