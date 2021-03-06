<?php
	/**
	 * ChickenASM Programming Language
	 * Copyright (C) 2013 powder96 <https://github.com/powder96/>
	 *
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 *
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 */
	
	namespace ChickenASMLanguage;
	
	final class ChickenDecompiler implements Decompiler {
		private $opcodes;
		
		public function __construct($opcodes) {
			$this->opcodes = $opcodes;
		}
		
		public function decompile() {
			$code = '';
			foreach($this->opcodes as $opcode)
				$code .= substr(str_repeat(' chicken', $opcode), 1) . "\n";
			return $code;
		}
	}