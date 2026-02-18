# Maintenance Task Proposals

## 1) Typo fix task
**Title:** Fix grammar typo in user-facing descriptions (`it's` → `its`)

- **Why:** Multiple user-facing texts use "get it's code", which is grammatically incorrect and appears in both README and language strings.
- **Scope suggestion:** Update wording consistently across README and both English language files.
- **Acceptance criteria:**
  - Replace all occurrences of "get it's code" with "get its code".
  - Keep the rest of each sentence unchanged.

## 2) Bug fix task
**Title:** Stop rendering empty module output when `code` is missing

- **Why:** The layout always renders a `<div id="webgozar_{id}">` wrapper and then outputs nothing for unknown/empty states. This can leave empty markup in pages and break layout expectations when the module is configured incorrectly.
- **Scope suggestion:** Add explicit guard/early return and/or default handling in the layout for invalid `$type` and missing `$code`.
- **Acceptance criteria:**
  - No HTML is rendered when `code` is empty/invalid.
  - Unknown `type` values fail safely (no script/form output, no notices).
  - Existing valid `counter`, `poll`, and `newsletter` output remains unchanged.

## 3) Documentation discrepancy task
**Title:** Reconcile conflicting registration/code instructions between docs

- **Why:** README says users must register and create a desired tool to get code, while the system language description says users must register and get code (without the create-tool step). This inconsistency can confuse users.
- **Scope suggestion:** Choose one canonical instruction and align README + `en-GB.mod_webgozar.ini` + `en-GB.mod_webgozar.sys.ini`.
- **Acceptance criteria:**
  - All English descriptions explain the same setup flow.
  - Wording matches behavior implied by module configuration (tool type + code).

## 4) Test improvement task
**Title:** Add basic render tests for each module type and invalid configuration

- **Why:** There is currently no automated coverage for output behavior in `tmpl/default.php`.
- **Scope suggestion:** Add a lightweight PHPUnit-style render test harness that evaluates the template with mocked `$type`, `$code`, `$newsletterLayout`, and `$showCounter` values.
- **Acceptance criteria:**
  - Test verifies expected script URL for `counter` and `poll`.
  - Test verifies newsletter form action and translated placeholders are present.
  - Test verifies invalid/missing `code` does not render output (after bug fix task).
  - Tests are runnable via a documented command in README (or CONTRIBUTING file if added).
