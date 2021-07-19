<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interfaces
 */
interface WriterFactory {
	public function createCsvWriter(): CsvWriter;
	public function createJsonWriter(): JsonWriter;
}

interface CsvWriter {
	public function write(array $line): string;
}

interface JsonWriter {
	public function write(array $data, bool $formatted): string;
}

/**
 * Unix Operating System
 */
class UnixCsvWriter implements CsvWriter {
	public function write(array $line): string {
		return join(', ', $line) . "\n";
	}
}

class UnixJsonWriter implements JsonWriter {
	public function write(array $data, bool $formatted): string{
		$options = 0;

		if ($formatted) {
			$options = JSON_PRETTY_PRINT;
		}

		return json_encode($data, $options);
	}
}

class UnixWriterFactory implements WriterFactory {
	public function createCsvWriter(): CsvWriter {
		return new UnixCsvWriter();
	}

	public function createJsonWriter(): JsonWriter {
		return new UnixJsonWriter();
	}
}

/**
 * Windows Operating System
 */
class WinCsvWriter implements CsvWriter {
	public function write(array $line): string {
		return join(',', $line) . "\r\n";
	}
}

class WinJsonWriter implements JsonWriter {
	public function write(array $data, bool $formatted): string {

		return json_encode($data, JSON_PRETTY_PRINT);
	}
}

class WinWriterFactory implements WriterFactory {
	public function createCsvWriter(): CsvWriter {
		return new WinCsvWriter();
	}

	public function createJsonWriter(): JsonWriter {
		return new WinJsonWriter();
	}
}


/**
 * Test Project
 */
use DesignPatterns\Creational\AbstractFactory\CsvWriter;
use DesignPatterns\Creational\AbstractFactory\JsonWriter;
use DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {
	public function provideFactory() {
		return [
			[new UnixWriterFactory()],
			[new WinWriterFactory()],
		];
	}

	/**
	 * @dataProvider provideFactory
	 */
	public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory) {
		$this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
		$this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
	}
}